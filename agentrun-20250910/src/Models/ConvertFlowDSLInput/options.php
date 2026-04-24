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

    /**
     * @var string[]
     */
    public $vpcEndpoints;
    protected $_name = [
        'compatibilityCheck' => 'compatibilityCheck',
        'credentialName' => 'credentialName',
        'flowName' => 'flowName',
        'vpcEndpointName' => 'vpcEndpointName',
        'vpcEndpoints' => 'vpcEndpoints',
    ];

    public function validate()
    {
        if (\is_array($this->vpcEndpoints)) {
            Model::validateArray($this->vpcEndpoints);
        }
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

        if (null !== $this->vpcEndpoints) {
            if (\is_array($this->vpcEndpoints)) {
                $res['vpcEndpoints'] = [];
                foreach ($this->vpcEndpoints as $key1 => $value1) {
                    $res['vpcEndpoints'][$key1] = $value1;
                }
            }
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

        if (isset($map['vpcEndpoints'])) {
            if (!empty($map['vpcEndpoints'])) {
                $model->vpcEndpoints = [];
                foreach ($map['vpcEndpoints'] as $key1 => $value1) {
                    $model->vpcEndpoints[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
