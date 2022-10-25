<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class CreateEaiJupyterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $eaisType;

    /**
     * @var string
     */
    public $environmentVarShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'eaisType'             => 'EaisType',
        'environmentVarShrink' => 'EnvironmentVar',
        'regionId'             => 'RegionId',
        'securityGroupId'      => 'SecurityGroupId',
        'vSwitchId'            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->eaisType) {
            $res['EaisType'] = $this->eaisType;
        }
        if (null !== $this->environmentVarShrink) {
            $res['EnvironmentVar'] = $this->environmentVarShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEaiJupyterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EaisType'])) {
            $model->eaisType = $map['EaisType'];
        }
        if (isset($map['EnvironmentVar'])) {
            $model->environmentVarShrink = $map['EnvironmentVar'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
