<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class CreateEdgeFunctionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $codeShrink;

    /**
     * @var string
     */
    public $customConfigShrink;

    /**
     * @var string
     */
    public $edgeFunctionName;

    /**
     * @var string
     */
    public $envsShrink;

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
        'codeShrink' => 'Code',
        'customConfigShrink' => 'CustomConfig',
        'edgeFunctionName' => 'EdgeFunctionName',
        'envsShrink' => 'Envs',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->codeShrink) {
            $res['Code'] = $this->codeShrink;
        }

        if (null !== $this->customConfigShrink) {
            $res['CustomConfig'] = $this->customConfigShrink;
        }

        if (null !== $this->edgeFunctionName) {
            $res['EdgeFunctionName'] = $this->edgeFunctionName;
        }

        if (null !== $this->envsShrink) {
            $res['Envs'] = $this->envsShrink;
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
            $model->codeShrink = $map['Code'];
        }

        if (isset($map['CustomConfig'])) {
            $model->customConfigShrink = $map['CustomConfig'];
        }

        if (isset($map['EdgeFunctionName'])) {
            $model->edgeFunctionName = $map['EdgeFunctionName'];
        }

        if (isset($map['Envs'])) {
            $model->envsShrink = $map['Envs'];
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
