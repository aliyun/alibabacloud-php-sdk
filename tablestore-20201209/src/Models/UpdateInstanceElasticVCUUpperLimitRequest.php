<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceElasticVCUUpperLimitRequest extends Model
{
    /**
     * @var float
     */
    public $elasticVCUUpperLimit;
    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'elasticVCUUpperLimit' => 'ElasticVCUUpperLimit',
        'instanceName'         => 'InstanceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticVCUUpperLimit) {
            $res['ElasticVCUUpperLimit'] = $this->elasticVCUUpperLimit;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['ElasticVCUUpperLimit'])) {
            $model->elasticVCUUpperLimit = $map['ElasticVCUUpperLimit'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
