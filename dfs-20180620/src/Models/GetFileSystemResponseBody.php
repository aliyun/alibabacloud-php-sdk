<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetFileSystemResponseBody\fileSystem;

class GetFileSystemResponseBody extends Model
{
    /**
     * @var fileSystem
     */
    public $fileSystem;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fileSystem' => 'FileSystem',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->fileSystem) {
            $this->fileSystem->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystem) {
            $res['FileSystem'] = null !== $this->fileSystem ? $this->fileSystem->toArray($noStream) : $this->fileSystem;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FileSystem'])) {
            $model->fileSystem = fileSystem::fromMap($map['FileSystem']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
