<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateDirectoryResponseBody\directory;
use AlibabaCloud\Tea\Model;

class UpdateDirectoryResponseBody extends Model
{
    /**
     * @description The information about the directory.
     *
     * @var directory
     */
    public $directory;

    /**
     * @description The ID of the request.
     *
     * @example B182C041-8C64-5F2F-A07B-FC67FAF89CF9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'directory' => 'Directory',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDirectoryResponseBody
     */
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
