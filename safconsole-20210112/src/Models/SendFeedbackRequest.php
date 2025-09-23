<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20210112\Models;

use AlibabaCloud\Dara\Model;

class SendFeedbackRequest extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $riskLabel;

    /**
     * @var string
     */
    public $sampleType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'reason' => 'Reason',
        'riskLabel' => 'RiskLabel',
        'sampleType' => 'SampleType',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->riskLabel) {
            $res['RiskLabel'] = $this->riskLabel;
        }

        if (null !== $this->sampleType) {
            $res['SampleType'] = $this->sampleType;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RiskLabel'])) {
            $model->riskLabel = $map['RiskLabel'];
        }

        if (isset($map['SampleType'])) {
            $model->sampleType = $map['SampleType'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
