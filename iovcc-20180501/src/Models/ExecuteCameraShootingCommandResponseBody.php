<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteCameraShootingCommandResponseBody\shootingRecord;
use AlibabaCloud\Tea\Model;

class ExecuteCameraShootingCommandResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @var shootingRecord
     */
    public $shootingRecord;
    protected $_name = [
        'requestId'      => 'RequestId',
        'shootingRecord' => 'ShootingRecord',
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
        if (null !== $this->shootingRecord) {
            $res['ShootingRecord'] = null !== $this->shootingRecord ? $this->shootingRecord->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteCameraShootingCommandResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShootingRecord'])) {
            $model->shootingRecord = shootingRecord::fromMap($map['ShootingRecord']);
        }

        return $model;
    }
}
