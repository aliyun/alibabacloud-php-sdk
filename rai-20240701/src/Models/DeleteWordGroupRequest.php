<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models;

use AlibabaCloud\Dara\Model;

class DeleteWordGroupRequest extends Model
{
    /**
     * @var int[]
     */
    public $groupIdList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'groupIdList' => 'GroupIdList',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->groupIdList)) {
            Model::validateArray($this->groupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupIdList) {
            if (\is_array($this->groupIdList)) {
                $res['GroupIdList'] = [];
                $n1 = 0;
                foreach ($this->groupIdList as $item1) {
                    $res['GroupIdList'][$n1] = $item1;
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
        if (isset($map['GroupIdList'])) {
            if (!empty($map['GroupIdList'])) {
                $model->groupIdList = [];
                $n1 = 0;
                foreach ($map['GroupIdList'] as $item1) {
                    $model->groupIdList[$n1] = $item1;
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
