<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseRuleStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class statisticsInfos extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $fourthValue;

    /**
     * @var string
     */
    public $primaryValue;

    /**
     * @var string
     */
    public $secondaryValue;

    /**
     * @var string
     */
    public $thirdValue;
    protected $_name = [
        'count' => 'Count',
        'fourthValue' => 'FourthValue',
        'primaryValue' => 'PrimaryValue',
        'secondaryValue' => 'SecondaryValue',
        'thirdValue' => 'ThirdValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->fourthValue) {
            $res['FourthValue'] = $this->fourthValue;
        }

        if (null !== $this->primaryValue) {
            $res['PrimaryValue'] = $this->primaryValue;
        }

        if (null !== $this->secondaryValue) {
            $res['SecondaryValue'] = $this->secondaryValue;
        }

        if (null !== $this->thirdValue) {
            $res['ThirdValue'] = $this->thirdValue;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['FourthValue'])) {
            $model->fourthValue = $map['FourthValue'];
        }

        if (isset($map['PrimaryValue'])) {
            $model->primaryValue = $map['PrimaryValue'];
        }

        if (isset($map['SecondaryValue'])) {
            $model->secondaryValue = $map['SecondaryValue'];
        }

        if (isset($map['ThirdValue'])) {
            $model->thirdValue = $map['ThirdValue'];
        }

        return $model;
    }
}
