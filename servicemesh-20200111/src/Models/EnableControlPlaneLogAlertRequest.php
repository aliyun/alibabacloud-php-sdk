<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class EnableControlPlaneLogAlertRequest extends Model
{
    /**
     * @var string
     */
    public $actionPolicyId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'actionPolicyId' => 'ActionPolicyId',
        'ruleId'         => 'RuleId',
        'serviceMeshId'  => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionPolicyId) {
            $res['ActionPolicyId'] = $this->actionPolicyId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableControlPlaneLogAlertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionPolicyId'])) {
            $model->actionPolicyId = $map['ActionPolicyId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
