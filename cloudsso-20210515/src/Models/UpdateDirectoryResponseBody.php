<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateDirectoryResponseBody\directory;

class UpdateDirectoryResponseBody extends Model
{
    /**
     * @var directory
     */
    public $directory;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'directory' => 'Directory',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->directory) {
            $this->directory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toArray($noStream) : $this->directory;
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
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
