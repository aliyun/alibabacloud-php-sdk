<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetResultListResponseBody;

use AlibabaCloud\Dara\Model;

class targetConfig extends Model
{
    /**
     * @var string
     */
    public $flag;
    /**
     * @var string
     */
    public $targetDefault;
    /**
     * @var string[]
     */
    public $targetList;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $totalCount;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'flag'          => 'Flag',
        'targetDefault' => 'TargetDefault',
        'targetList'    => 'TargetList',
        'targetType'    => 'TargetType',
        'totalCount'    => 'TotalCount',
        'type'          => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->targetList)) {
            Model::validateArray($this->targetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }

        if (null !== $this->targetDefault) {
            $res['TargetDefault'] = $this->targetDefault;
        }

        if (null !== $this->targetList) {
            if (\is_array($this->targetList)) {
                $res['TargetList'] = [];
                $n1                = 0;
                foreach ($this->targetList as $item1) {
                    $res['TargetList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }

        if (isset($map['TargetDefault'])) {
            $model->targetDefault = $map['TargetDefault'];
        }

        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n1                = 0;
                foreach ($map['TargetList'] as $item1) {
                    $model->targetList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
