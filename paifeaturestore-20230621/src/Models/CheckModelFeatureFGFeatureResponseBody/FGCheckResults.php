<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\CheckModelFeatureFGFeatureResponseBody;

use AlibabaCloud\Tea\Model;

class FGCheckResults extends Model
{
    /**
     * @example f1[1]: these lookup_features\\"s LookupValueFeature(key) not exist in model features
     *
     * @var string
     */
    public $message;

    /**
     * @example SeqSubEx
     *
     * @var string
     */
    public $ruleCode;

    /**
     * @example True
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'message' => 'Message',
        'ruleCode' => 'RuleCode',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return FGCheckResults
     */
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
