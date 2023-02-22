<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InitResourceDirectoryResponseBody\resourceDirectory;
use AlibabaCloud\Tea\Model;

class InitResourceDirectoryResponseBody extends Model
{
    /**
     * @example CD76D376-2517-4924-92C5-DBC52262F93A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceDirectory
     */
    public $resourceDirectory;
    protected $_name = [
        'requestId'         => 'RequestId',
        'resourceDirectory' => 'ResourceDirectory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceDirectory) {
            $res['ResourceDirectory'] = null !== $this->resourceDirectory ? $this->resourceDirectory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitResourceDirectoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceDirectory'])) {
            $model->resourceDirectory = resourceDirectory::fromMap($map['ResourceDirectory']);
        }

        return $model;
    }
}
