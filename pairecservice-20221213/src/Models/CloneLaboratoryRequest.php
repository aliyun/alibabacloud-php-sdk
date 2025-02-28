<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CloneLaboratoryRequest extends Model
{
    /**
     * @var bool
     */
    public $cloneExperimentGroup;
    /**
     * @var string
     */
    public $environment;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'cloneExperimentGroup' => 'CloneExperimentGroup',
        'environment'          => 'Environment',
        'instanceId'           => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloneExperimentGroup) {
            $res['CloneExperimentGroup'] = $this->cloneExperimentGroup;
        }

        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
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
        if (isset($map['CloneExperimentGroup'])) {
            $model->cloneExperimentGroup = $map['CloneExperimentGroup'];
        }

        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
