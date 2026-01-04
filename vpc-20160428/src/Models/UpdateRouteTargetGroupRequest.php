<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateRouteTargetGroupRequest\routeTargetMemberList;

class UpdateRouteTargetGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;

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
    protected $_name = [
        'clientToken' => 'ClientToken',
        'regionId' => 'RegionId',
        'routeTargetGroupDescription' => 'RouteTargetGroupDescription',
        'routeTargetGroupId' => 'RouteTargetGroupId',
        'routeTargetGroupName' => 'RouteTargetGroupName',
        'routeTargetMemberList' => 'RouteTargetMemberList',
    ];

    public function validate()
    {
        if (\is_array($this->routeTargetMemberList)) {
            Model::validateArray($this->routeTargetMemberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
