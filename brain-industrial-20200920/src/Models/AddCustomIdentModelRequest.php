<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class AddCustomIdentModelRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopParameterId;

    /**
     * @var string
     */
    public $key;

    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $pidLoopId;
    protected $_name = [
        'pidLoopParameterId' => 'PidLoopParameterId',
        'key'                => 'Key',
        'value'              => 'Value',
        'pidLoopId'          => 'PidLoopId',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopParameterId', $this->pidLoopParameterId, true);
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopParameterId) {
            $res['PidLoopParameterId'] = $this->pidLoopParameterId;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomIdentModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopParameterId'])) {
            $model->pidLoopParameterId = $map['PidLoopParameterId'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }

        return $model;
    }
}
