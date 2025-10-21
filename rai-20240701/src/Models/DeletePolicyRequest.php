<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class DeletePolicyRequest extends Model
{
    /**
     * @var int[]
     */
    public $policyIdList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'policyIdList' => 'PolicyIdList',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->policyIdList)) {
            Model::validateArray($this->policyIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyIdList) {
            if (\is_array($this->policyIdList)) {
                $res['PolicyIdList'] = [];
                $n1 = 0;
                foreach ($this->policyIdList as $item1) {
                    $res['PolicyIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['PolicyIdList'])) {
                $model->policyIdList = [];
                $n1 = 0;
                foreach ($map['PolicyIdList'] as $item1) {
                    $model->policyIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
