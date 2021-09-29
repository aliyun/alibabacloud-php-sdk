<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListCameraShootingRecordsResponseBody\shootingRecords;
use AlibabaCloud\Tea\Model;

class ListCameraShootingRecordsResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @var shootingRecords
     */
    public $shootingRecords;
    protected $_name = [
        'requestId'       => 'RequestId',
        'shootingRecords' => 'ShootingRecords',
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
        if (null !== $this->shootingRecords) {
            $res['ShootingRecords'] = null !== $this->shootingRecords ? $this->shootingRecords->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCameraShootingRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShootingRecords'])) {
            $model->shootingRecords = shootingRecords::fromMap($map['ShootingRecords']);
        }

        return $model;
    }
}
