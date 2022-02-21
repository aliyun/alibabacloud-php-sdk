<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DeleteRenderingDevicesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedIds' => 'FailedIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedIds) {
            $res['FailedIds'] = $this->failedIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRenderingDevicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedIds'])) {
            if (!empty($map['FailedIds'])) {
                $model->failedIds = $map['FailedIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
