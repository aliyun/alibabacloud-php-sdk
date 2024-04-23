<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateArtifactLifecycleRuleResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example True
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 0AA66379-B880-5123-9F6A-96BB25D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example cralr-b6thg027zmk1****
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'code'      => 'Code',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'ruleId'    => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateArtifactLifecycleRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
