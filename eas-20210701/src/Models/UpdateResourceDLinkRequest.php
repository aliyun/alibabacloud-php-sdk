<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceDLinkRequest extends Model
{
    /**
     * @description 要打通的客户端的网段信息，会将该网段加入到服务端的回包路由中，与VSwitchIdList可二选一
     *
     * @var string
     */
    public $destinationCIDRs;

    /**
     * @description 客户端ECS归属的安全组
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 对端的主VSwitchID，会在该vswitch中创建ENI
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description 要打通的客户端的vswitch列表，会将这些vswitch对应的网段加入到服务端的回包路由中
     *
     * @var string[]
     */
    public $vSwitchIdList;
    protected $_name = [
        'destinationCIDRs' => 'DestinationCIDRs',
        'securityGroupId'  => 'SecurityGroupId',
        'vSwitchId'        => 'VSwitchId',
        'vSwitchIdList'    => 'VSwitchIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationCIDRs) {
            $res['DestinationCIDRs'] = $this->destinationCIDRs;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchIdList) {
            $res['VSwitchIdList'] = $this->vSwitchIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceDLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationCIDRs'])) {
            $model->destinationCIDRs = $map['DestinationCIDRs'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchIdList'])) {
            if (!empty($map['VSwitchIdList'])) {
                $model->vSwitchIdList = $map['VSwitchIdList'];
            }
        }

        return $model;
    }
}
