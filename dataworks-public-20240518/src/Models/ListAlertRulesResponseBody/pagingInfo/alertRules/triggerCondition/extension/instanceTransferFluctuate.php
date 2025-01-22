<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAlertRulesResponseBody\pagingInfo\alertRules\triggerCondition\extension;

use AlibabaCloud\Dara\Model;

class instanceTransferFluctuate extends Model
{
    /**
     * @var int
     */
    public $percentage;
    /**
     * @var string
     */
    public $trend;
    protected $_name = [
        'percentage' => 'Percentage',
        'trend'      => 'Trend',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->trend) {
            $res['Trend'] = $this->trend;
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
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['Trend'])) {
            $model->trend = $map['Trend'];
        }

        return $model;
    }
}
