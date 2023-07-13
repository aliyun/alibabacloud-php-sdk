<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList;
use AlibabaCloud\Tea\Model;

class DescribeProductsOfActiveMetricRuleResponseBody extends Model
{
    /**
     * @description The information about the services for which one-click alert is enabled.
     *
     * @var allProductInitMetricRuleList
     */
    public $allProductInitMetricRuleList;

    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example ecs,rds
     *
     * @var string
     */
    public $datapoints;

    /**
     * @description The returned message.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example F82E6667-7811-4BA0-842F-5B2DC42BBAAD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'allProductInitMetricRuleList' => 'AllProductInitMetricRuleList',
        'code'                         => 'Code',
        'datapoints'                   => 'Datapoints',
        'message'                      => 'Message',
        'requestId'                    => 'RequestId',
        'success'                      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allProductInitMetricRuleList) {
            $res['AllProductInitMetricRuleList'] = null !== $this->allProductInitMetricRuleList ? $this->allProductInitMetricRuleList->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeProductsOfActiveMetricRuleResponseBody
     */
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
