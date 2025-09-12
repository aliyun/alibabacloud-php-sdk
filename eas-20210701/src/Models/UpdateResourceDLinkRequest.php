<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class UpdateResourceDLinkRequest extends Model
{
    /**
     * @var string
     */
    public $destinationCIDRs;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string[]
     */
    public $vSwitchIdList;
    protected $_name = [
        'destinationCIDRs' => 'DestinationCIDRs',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId' => 'VSwitchId',
        'vSwitchIdList' => 'VSwitchIdList',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchIdList)) {
            Model::validateArray($this->vSwitchIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vSwitchIdList)) {
                $res['VSwitchIdList'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIdList as $item1) {
                    $res['VSwitchIdList'][$n1] = $item1;
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
                $model->vSwitchIdList = [];
                $n1 = 0;
                foreach ($map['VSwitchIdList'] as $item1) {
                    $model->vSwitchIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
