<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\InitResourceDirectoryResponse\resourceDirectory;
use AlibabaCloud\Tea\Model;

class InitResourceDirectoryResponse extends Model
{
    /**
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
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('resourceDirectory', $this->resourceDirectory, true);
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
     * @return InitResourceDirectoryResponse
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
