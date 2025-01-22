<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateNetworkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $vpcId;
    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'resourceGroupId' => 'ResourceGroupId',
        'vpcId'           => 'VpcId',
        'vswitchId'       => 'VswitchId',
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
