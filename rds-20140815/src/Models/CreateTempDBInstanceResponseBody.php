<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateTempDBInstanceResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 248DE93F-8647-4B9D-8287-4A4A0FE56AD5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the temporary instance.
     *
     * @example sub138xxxxx_rm-xxxxx
     *
     * @var string
     */
    public $tempDBInstanceId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'tempDBInstanceId' => 'TempDBInstanceId',
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
        if (null !== $this->tempDBInstanceId) {
            $res['TempDBInstanceId'] = $this->tempDBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTempDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TempDBInstanceId'])) {
            $model->tempDBInstanceId = $map['TempDBInstanceId'];
        }

        return $model;
    }
}
