<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class DeletePolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $policyIdListShrink;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'policyIdListShrink' => 'PolicyIdList',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyIdListShrink) {
            $res['PolicyIdList'] = $this->policyIdListShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['PolicyIdList'])) {
            $model->policyIdListShrink = $map['PolicyIdList'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
