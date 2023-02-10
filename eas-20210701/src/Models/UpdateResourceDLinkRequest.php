<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceDLinkRequest extends Model
{
    /**
     * @example 72.16.0.0/16
     *
     * @var string
     */
    public $destinationCIDRs;

    /**
     * @example sg-bp149cedsfx2rfspd2d
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vpc-uf66uio7md****
     *
     * @var string
     */
    public $vSwitchId;

    /**
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
