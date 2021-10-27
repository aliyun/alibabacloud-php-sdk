<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\ListVersionsResponseBody\versions;
use AlibabaCloud\Tea\Model;

class ListVersionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var versions
     */
    public $versions;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'versions'  => 'versions',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->versions) {
            $res['versions'] = null !== $this->versions ? $this->versions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['versions'])) {
            $model->versions = versions::fromMap($map['versions']);
        }

        return $model;
    }
}
