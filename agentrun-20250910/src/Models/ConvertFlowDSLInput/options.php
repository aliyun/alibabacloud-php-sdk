<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLInput;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var bool
     */
    public $compatibilityCheck;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $vpcEndpointName;
    protected $_name = [
        'compatibilityCheck' => 'compatibilityCheck',
        'credentialName' => 'credentialName',
        'flowName' => 'flowName',
        'vpcEndpointName' => 'vpcEndpointName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compatibilityCheck) {
            $res['compatibilityCheck'] = $this->compatibilityCheck;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->flowName) {
            $res['flowName'] = $this->flowName;
        }

        if (null !== $this->vpcEndpointName) {
            $res['vpcEndpointName'] = $this->vpcEndpointName;
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
        if (isset($map['compatibilityCheck'])) {
            $model->compatibilityCheck = $map['compatibilityCheck'];
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['flowName'])) {
            $model->flowName = $map['flowName'];
        }

        if (isset($map['vpcEndpointName'])) {
            $model->vpcEndpointName = $map['vpcEndpointName'];
        }

        return $model;
    }
}
