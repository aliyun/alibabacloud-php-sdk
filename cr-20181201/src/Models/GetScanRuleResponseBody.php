<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cr\V20181201\Models\GetScanRuleResponseBody\scanRule;

class GetScanRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scanRule
     */
    public $scanRule;
    protected $_name = [
        'code' => 'Code',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'scanRule' => 'ScanRule',
    ];

    public function validate()
    {
        if (null !== $this->scanRule) {
            $this->scanRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->scanRule) {
            $res['ScanRule'] = null !== $this->scanRule ? $this->scanRule->toArray($noStream) : $this->scanRule;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ScanRule'])) {
            $model->scanRule = scanRule::fromMap($map['ScanRule']);
        }

        return $model;
    }
}
