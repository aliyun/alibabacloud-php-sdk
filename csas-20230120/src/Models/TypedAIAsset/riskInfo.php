<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\TypedAIAsset;

use AlibabaCloud\Dara\Model;

class riskInfo extends Model
{
    /**
     * @var int
     */
    public $highRiskCnt;

    /**
     * @var int
     */
    public $lowRiskCnt;

    /**
     * @var int
     */
    public $mediumRiskCnt;
    protected $_name = [
        'highRiskCnt' => 'highRiskCnt',
        'lowRiskCnt' => 'lowRiskCnt',
        'mediumRiskCnt' => 'mediumRiskCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->highRiskCnt) {
            $res['highRiskCnt'] = $this->highRiskCnt;
        }

        if (null !== $this->lowRiskCnt) {
            $res['lowRiskCnt'] = $this->lowRiskCnt;
        }

        if (null !== $this->mediumRiskCnt) {
            $res['mediumRiskCnt'] = $this->mediumRiskCnt;
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
        if (isset($map['highRiskCnt'])) {
            $model->highRiskCnt = $map['highRiskCnt'];
        }

        if (isset($map['lowRiskCnt'])) {
            $model->lowRiskCnt = $map['lowRiskCnt'];
        }

        if (isset($map['mediumRiskCnt'])) {
            $model->mediumRiskCnt = $map['mediumRiskCnt'];
        }

        return $model;
    }
}
