<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\EnableResourceDirectoryResponseBody\resourceDirectory;

class EnableResourceDirectoryResponseBody extends Model
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
        if (null !== $this->resourceDirectory) {
            $this->resourceDirectory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceDirectory) {
            $res['ResourceDirectory'] = null !== $this->resourceDirectory ? $this->resourceDirectory->toArray($noStream) : $this->resourceDirectory;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
