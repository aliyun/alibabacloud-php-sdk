<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ReplaceMigrationAvailableNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var int
     */
    public $operatorUid;

    /**
     * @var string
     */
    public $v1Numbers;

    /**
     * @var string
     */
    public $v2Numbers;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'operatorName' => 'OperatorName',
        'operatorUid'  => 'OperatorUid',
        'v1Numbers'    => 'V1Numbers',
        'v2Numbers'    => 'V2Numbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operatorName) {
            $res['OperatorName'] = $this->operatorName;
        }
        if (null !== $this->operatorUid) {
            $res['OperatorUid'] = $this->operatorUid;
        }
        if (null !== $this->v1Numbers) {
            $res['V1Numbers'] = $this->v1Numbers;
        }
        if (null !== $this->v2Numbers) {
            $res['V2Numbers'] = $this->v2Numbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceMigrationAvailableNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OperatorName'])) {
            $model->operatorName = $map['OperatorName'];
        }
        if (isset($map['OperatorUid'])) {
            $model->operatorUid = $map['OperatorUid'];
        }
        if (isset($map['V1Numbers'])) {
            $model->v1Numbers = $map['V1Numbers'];
        }
        if (isset($map['V2Numbers'])) {
            $model->v2Numbers = $map['V2Numbers'];
        }

        return $model;
    }
}
