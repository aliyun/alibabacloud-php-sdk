<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsResponseBody\items;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'name'        => 'Name',
        'riskLevelId' => 'RiskLevelId',
        'count'       => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
