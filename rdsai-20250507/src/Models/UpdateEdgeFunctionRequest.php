<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateEdgeFunctionRequest\code;

class UpdateEdgeFunctionRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var code
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $customConfig;

    /**
     * @var string
     */
    public $edgeFunctionName;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'code' => 'Code',
        'customConfig' => 'CustomConfig',
        'edgeFunctionName' => 'EdgeFunctionName',
        'envs' => 'Envs',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->code) {
            $this->code->validate();
        }
        if (\is_array($this->customConfig)) {
            Model::validateArray($this->customConfig);
        }
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->code) {
            $res['Code'] = null !== $this->code ? $this->code->toArray($noStream) : $this->code;
        }

        if (null !== $this->customConfig) {
            if (\is_array($this->customConfig)) {
                $res['CustomConfig'] = [];
                foreach ($this->customConfig as $key1 => $value1) {
                    $res['CustomConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->edgeFunctionName) {
            $res['EdgeFunctionName'] = $this->edgeFunctionName;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                foreach ($this->envs as $key1 => $value1) {
                    $res['Envs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Code'])) {
            $model->code = code::fromMap($map['Code']);
        }

        if (isset($map['CustomConfig'])) {
            if (!empty($map['CustomConfig'])) {
                $model->customConfig = [];
                foreach ($map['CustomConfig'] as $key1 => $value1) {
                    $model->customConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['EdgeFunctionName'])) {
            $model->edgeFunctionName = $map['EdgeFunctionName'];
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                foreach ($map['Envs'] as $key1 => $value1) {
                    $model->envs[$key1] = $value1;
                }
            }
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
