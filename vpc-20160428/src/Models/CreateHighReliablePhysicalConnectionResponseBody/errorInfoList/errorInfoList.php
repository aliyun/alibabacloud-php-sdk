<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\errorInfoList;

use AlibabaCloud\Tea\Model;

class errorInfoList extends Model
{
    /**
     * @example pconn.high.reliable.dryrun.error.disable.outbound.data.transfer.billing
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example pconn.high.reliable.dryrun.error.disable.outbound.data.transfer.billing
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example pc-j5e5qqo616p81ncspbll1
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'instanceId'   => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
