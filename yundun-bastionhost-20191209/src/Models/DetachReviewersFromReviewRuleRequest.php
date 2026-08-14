<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class DetachReviewersFromReviewRuleRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $principalIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $reviewRuleId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'principalIds' => 'PrincipalIds',
        'regionId' => 'RegionId',
        'reviewRuleId' => 'ReviewRuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->principalIds) {
            $res['PrincipalIds'] = $this->principalIds;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reviewRuleId) {
            $res['ReviewRuleId'] = $this->reviewRuleId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PrincipalIds'])) {
            $model->principalIds = $map['PrincipalIds'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReviewRuleId'])) {
            $model->reviewRuleId = $map['ReviewRuleId'];
        }

        return $model;
    }
}
