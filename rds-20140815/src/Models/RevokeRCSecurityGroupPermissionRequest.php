<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class RevokeRCSecurityGroupPermissionRequest extends Model
{
    /**
     * @var string
     */
    public $direction;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $securityGroupId;
    /**
     * @var string[]
     */
    public $securityGroupRuleIdList;
    protected $_name = [
        'direction'               => 'Direction',
        'regionId'                => 'RegionId',
        'securityGroupId'         => 'SecurityGroupId',
        'securityGroupRuleIdList' => 'SecurityGroupRuleIdList',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroupRuleIdList)) {
            Model::validateArray($this->securityGroupRuleIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->securityGroupRuleIdList) {
            if (\is_array($this->securityGroupRuleIdList)) {
                $res['SecurityGroupRuleIdList'] = [];
                $n1                             = 0;
                foreach ($this->securityGroupRuleIdList as $item1) {
                    $res['SecurityGroupRuleIdList'][$n1++] = $item1;
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SecurityGroupRuleIdList'])) {
            if (!empty($map['SecurityGroupRuleIdList'])) {
                $model->securityGroupRuleIdList = [];
                $n1                             = 0;
                foreach ($map['SecurityGroupRuleIdList'] as $item1) {
                    $model->securityGroupRuleIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
