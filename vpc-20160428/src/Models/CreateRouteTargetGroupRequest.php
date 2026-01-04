<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteTargetGroupRequest\routeTargetMemberList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteTargetGroupRequest\tag;

class CreateRouteTargetGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $configMode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $routeTargetGroupDescription;

    /**
     * @var string
     */
    public $routeTargetGroupName;

    /**
     * @var routeTargetMemberList[]
     */
    public $routeTargetMemberList;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'configMode' => 'ConfigMode',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'routeTargetGroupDescription' => 'RouteTargetGroupDescription',
        'routeTargetGroupName' => 'RouteTargetGroupName',
        'routeTargetMemberList' => 'RouteTargetMemberList',
        'tag' => 'Tag',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->routeTargetMemberList)) {
            Model::validateArray($this->routeTargetMemberList);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configMode) {
            $res['ConfigMode'] = $this->configMode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->routeTargetGroupDescription) {
            $res['RouteTargetGroupDescription'] = $this->routeTargetGroupDescription;
        }

        if (null !== $this->routeTargetGroupName) {
            $res['RouteTargetGroupName'] = $this->routeTargetGroupName;
        }

        if (null !== $this->routeTargetMemberList) {
            if (\is_array($this->routeTargetMemberList)) {
                $res['RouteTargetMemberList'] = [];
                $n1 = 0;
                foreach ($this->routeTargetMemberList as $item1) {
                    $res['RouteTargetMemberList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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

        if (isset($map['ConfigMode'])) {
            $model->configMode = $map['ConfigMode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RouteTargetGroupDescription'])) {
            $model->routeTargetGroupDescription = $map['RouteTargetGroupDescription'];
        }

        if (isset($map['RouteTargetGroupName'])) {
            $model->routeTargetGroupName = $map['RouteTargetGroupName'];
        }

        if (isset($map['RouteTargetMemberList'])) {
            if (!empty($map['RouteTargetMemberList'])) {
                $model->routeTargetMemberList = [];
                $n1 = 0;
                foreach ($map['RouteTargetMemberList'] as $item1) {
                    $model->routeTargetMemberList[$n1] = routeTargetMemberList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
