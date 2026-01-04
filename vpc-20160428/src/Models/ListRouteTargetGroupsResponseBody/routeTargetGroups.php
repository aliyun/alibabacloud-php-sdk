<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListRouteTargetGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListRouteTargetGroupsResponseBody\routeTargetGroups\routeTargetMemberList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListRouteTargetGroupsResponseBody\routeTargetGroups\tags;

class routeTargetGroups extends Model
{
    /**
     * @var string
     */
    public $configMode;

    /**
     * @var string
     */
    public $createTime;

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
    public $routeTargetGroupId;

    /**
     * @var string
     */
    public $routeTargetGroupName;

    /**
     * @var routeTargetMemberList[]
     */
    public $routeTargetMemberList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'configMode' => 'ConfigMode',
        'createTime' => 'CreateTime',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'routeTargetGroupDescription' => 'RouteTargetGroupDescription',
        'routeTargetGroupId' => 'RouteTargetGroupId',
        'routeTargetGroupName' => 'RouteTargetGroupName',
        'routeTargetMemberList' => 'RouteTargetMemberList',
        'status' => 'Status',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->routeTargetMemberList)) {
            Model::validateArray($this->routeTargetMemberList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configMode) {
            $res['ConfigMode'] = $this->configMode;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->routeTargetGroupId) {
            $res['RouteTargetGroupId'] = $this->routeTargetGroupId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConfigMode'])) {
            $model->configMode = $map['ConfigMode'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['RouteTargetGroupId'])) {
            $model->routeTargetGroupId = $map['RouteTargetGroupId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
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
