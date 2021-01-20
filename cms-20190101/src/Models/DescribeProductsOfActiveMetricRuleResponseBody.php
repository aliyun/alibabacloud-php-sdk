<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList;
use AlibabaCloud\Tea\Model;

class DescribeProductsOfActiveMetricRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var allProductInitMetricRuleList
     */
    public $allProductInitMetricRuleList;

    /**
     * @var string
     */
    public $datapoints;

    /**
     * @var int
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'                      => 'Message',
        'requestId'                    => 'RequestId',
        'allProductInitMetricRuleList' => 'AllProductInitMetricRuleList',
        'datapoints'                   => 'Datapoints',
        'code'                         => 'Code',
        'success'                      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->allProductInitMetricRuleList) {
            $res['AllProductInitMetricRuleList'] = null !== $this->allProductInitMetricRuleList ? $this->allProductInitMetricRuleList->toMap() : null;
        }
        if (null !== $this->datapoints) {
            $res['Datapoints'] = $this->datapoints;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProductsOfActiveMetricRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AllProductInitMetricRuleList'])) {
            $model->allProductInitMetricRuleList = allProductInitMetricRuleList::fromMap($map['AllProductInitMetricRuleList']);
        }
        if (isset($map['Datapoints'])) {
            $model->datapoints = $map['Datapoints'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
