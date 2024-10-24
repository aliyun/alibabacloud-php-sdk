<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class CreateEaiJupyterShrinkRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $eaisName;

    /**
     * @description This parameter is required.
     *
     * @example eais.ei-a6.2xlarge
     *
     * @var string
     */
    public $eaisType;

    /**
     * @var string
     */
    public $environmentVarShrink;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example sg-uf66jeqopgqa9hdn****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description This parameter is required.
     *
     * @example vsw-uf6h3rbwbm90urjwa****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'eaisName'             => 'EaisName',
        'eaisType'             => 'EaisType',
        'environmentVarShrink' => 'EnvironmentVar',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
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
        if (null !== $this->eaisName) {
            $res['EaisName'] = $this->eaisName;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['EaisName'])) {
            $model->eaisName = $map['EaisName'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
