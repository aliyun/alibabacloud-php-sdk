<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEcsRequest\ecs;
use AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEcsRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateEaiEcsRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example eais-test01
     *
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
     * @var ecs
     */
    public $ecs;

    /**
     * @description This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmvpuy4a5****
     *
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
     * @var tag[]
     */
    public $tag;

    /**
     * @description This parameter is required.
     *
     * @example vsw-uf6h3rbwbm90urjwa****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'eaisName'        => 'EaisName',
        'eaisType'        => 'EaisType',
        'ecs'             => 'Ecs',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'tag'             => 'Tag',
        'vSwitchId'       => 'VSwitchId',
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
        if (null !== $this->ecs) {
            $res['Ecs'] = null !== $this->ecs ? $this->ecs->toMap() : null;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEaiEcsRequest
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
        if (isset($map['Ecs'])) {
            $model->ecs = ecs::fromMap($map['Ecs']);
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
