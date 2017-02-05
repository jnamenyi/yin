<?php
declare(strict_types=1);

namespace WoohooLabs\Yin\JsonApi\Exception;

use WoohooLabs\Yin\JsonApi\Schema\Error;
use WoohooLabs\Yin\JsonApi\Schema\ErrorSource;

class ResourceIdInvalid extends JsonApiException
{
    /**
     * @var string
     */
    protected $id;

    public function __construct(string $id)
    {
        parent::__construct("The resource ID '$id' is invalid!");
        $this->id = $id;
    }

    protected function getErrors(): array
    {
        return [
            Error::create()
                ->setStatus("400")
                ->setCode("RESOURCE_ID_INVALID")
                ->setTitle("Resource ID is invalid")
                ->setDetail("The resource ID '$this->id' is invalid!")
                ->setSource(ErrorSource::fromPointer("/data/id"))
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }
}
