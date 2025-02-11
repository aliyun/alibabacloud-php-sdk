<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoResourceOptimizeRulesAsyncResponseBody\data\configResponse;

use AlibabaCloud\Dara\Model;

class configSuccessInstanceList extends Model
{
    /**
     * @var bool
     */
    public $configSuccess;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'configSuccess' => 'ConfigSuccess',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configSuccess) {
            $res['ConfigSuccess'] = $this->configSuccess;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigSuccess'])) {
            $model->configSuccess = $map['ConfigSuccess'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
