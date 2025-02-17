<?php
declare(strict_types=1);

namespace WoohooLabs\Yin\JsonApi\Exception;

use Throwable;
use WoohooLabs\Yin\JsonApi\Schema\Document\ErrorDocumentInterface;

interface JsonApiExceptionInterface extends Throwable
{
    public function getErrorDocument(): ErrorDocumentInterface;
}
