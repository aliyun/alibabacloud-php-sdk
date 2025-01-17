<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody\list_;

use AlibabaCloud\Dara\Model;

class fixList extends Model
{
    /**
     * @var int
     */
    public $riskId;
    /**
     * @var string
     */
    public $riskName;
    protected $_name = [
        'riskId'   => 'RiskId',
        'riskName' => 'RiskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskId) {
            $res['RiskId'] = $this->riskId;
        }

        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
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
        if (isset($map['RiskId'])) {
            $model->riskId = $map['RiskId'];
        }

        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }

        return $model;
    }
}
