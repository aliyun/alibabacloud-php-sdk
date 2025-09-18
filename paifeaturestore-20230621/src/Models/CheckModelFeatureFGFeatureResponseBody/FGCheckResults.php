<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckModelFeatureFGFeatureResponseBody;

use AlibabaCloud\Dara\Model;

class FGCheckResults extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $ruleCode;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'ruleCode' => 'RuleCode',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->ruleCode) {
            $res['RuleCode'] = $this->ruleCode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RuleCode'])) {
            $model->ruleCode = $map['RuleCode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
