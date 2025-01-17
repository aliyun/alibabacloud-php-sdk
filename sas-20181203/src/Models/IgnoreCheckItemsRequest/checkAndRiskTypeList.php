<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\IgnoreCheckItemsRequest;

use AlibabaCloud\Dara\Model;

class checkAndRiskTypeList extends Model
{
    /**
     * @var int
     */
    public $checkId;
    /**
     * @var string
     */
    public $riskType;
    protected $_name = [
        'checkId'  => 'CheckId',
        'riskType' => 'RiskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        return $model;
    }
}
