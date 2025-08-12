<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList;

class DescribeProductsOfActiveMetricRuleResponseBody extends Model
{
    /**
     * @var allProductInitMetricRuleList
     */
    public $allProductInitMetricRuleList;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $datapoints;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'allProductInitMetricRuleList' => 'AllProductInitMetricRuleList',
        'code' => 'Code',
        'datapoints' => 'Datapoints',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->allProductInitMetricRuleList) {
            $this->allProductInitMetricRuleList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allProductInitMetricRuleList) {
            $res['AllProductInitMetricRuleList'] = null !== $this->allProductInitMetricRuleList ? $this->allProductInitMetricRuleList->toArray($noStream) : $this->allProductInitMetricRuleList;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->datapoints) {
            $res['Datapoints'] = $this->datapoints;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['AllProductInitMetricRuleList'])) {
            $model->allProductInitMetricRuleList = allProductInitMetricRuleList::fromMap($map['AllProductInitMetricRuleList']);
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Datapoints'])) {
            $model->datapoints = $map['Datapoints'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
