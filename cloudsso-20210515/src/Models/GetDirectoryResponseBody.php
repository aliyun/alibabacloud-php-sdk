<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectoryResponseBody\directory;
use AlibabaCloud\Tea\Model;

class GetDirectoryResponseBody extends Model
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
     * @example AA6A9E4B-8A61-59E1-AA87-F61CA18258A3
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
     * @return GetDirectoryResponseBody
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
