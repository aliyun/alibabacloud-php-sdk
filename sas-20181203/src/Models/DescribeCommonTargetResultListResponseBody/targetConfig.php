<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetResultListResponseBody;

use AlibabaCloud\Tea\Model;

class targetConfig extends Model
{
    /**
     * @example del
     *
     * @var string
     */
    public $flag;

    /**
     * @example add
     *
     * @var string
     */
    public $targetDefault;

    /**
     * @var string[]
     */
    public $targetList;

    /**
     * @example uuid
     *
     * @var string
     */
    public $targetType;

    /**
     * @example 22
     *
     * @var string
     */
    public $totalCount;

    /**
     * @example webshell_timescan
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->targetDefault) {
            $res['TargetDefault'] = $this->targetDefault;
        }
        if (null !== $this->targetList) {
            $res['TargetList'] = $this->targetList;
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

    /**
     * @param array $map
     *
     * @return targetConfig
     */
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
                $model->targetList = $map['TargetList'];
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
