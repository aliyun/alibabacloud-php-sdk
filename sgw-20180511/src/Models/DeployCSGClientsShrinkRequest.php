<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DeployCSGClientsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientRegionId;

    /**
     * @var string
     */
    public $ecsInstanceIdsShrink;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientRegionId'       => 'ClientRegionId',
        'ecsInstanceIdsShrink' => 'EcsInstanceIds',
        'securityToken'        => 'SecurityToken',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientRegionId) {
            $res['ClientRegionId'] = $this->clientRegionId;
        }
        if (null !== $this->ecsInstanceIdsShrink) {
            $res['EcsInstanceIds'] = $this->ecsInstanceIdsShrink;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployCSGClientsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientRegionId'])) {
            $model->clientRegionId = $map['ClientRegionId'];
        }
        if (isset($map['EcsInstanceIds'])) {
            $model->ecsInstanceIdsShrink = $map['EcsInstanceIds'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
