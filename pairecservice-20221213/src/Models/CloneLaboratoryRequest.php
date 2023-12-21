<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CloneLaboratoryRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $cloneExperimentGroup;

    /**
     * @example Daily
     *
     * @var string
     */
    public $environment;

    /**
     * @example pairec-cn-abcdefg1234
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CloneLaboratoryRequest
     */
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
