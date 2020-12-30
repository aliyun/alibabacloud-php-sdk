<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class GetSmsConfigRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $scenario;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'scenario'   => 'Scenario',
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
        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSmsConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Scenario'])) {
            if (!empty($map['Scenario'])) {
                $model->scenario = $map['Scenario'];
            }
        }

        return $model;
    }
}
