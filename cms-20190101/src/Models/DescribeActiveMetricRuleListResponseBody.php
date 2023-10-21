<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\datapoints;
use AlibabaCloud\Tea\Model;

class DescribeActiveMetricRuleListResponseBody extends Model
{
    /**
     * @description The details of the alert rules.
     *
     * @var alertList
     */
    public $alertList;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The details of the alert rules.
     *
     * @var datapoints
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
        'alertList'  => 'AlertList',
        'code'       => 'Code',
        'datapoints' => 'Datapoints',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertList) {
            $res['AlertList'] = null !== $this->alertList ? $this->alertList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->datapoints) {
            $res['Datapoints'] = null !== $this->datapoints ? $this->datapoints->toMap() : null;
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
     * @return DescribeActiveMetricRuleListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertList'])) {
            $model->alertList = alertList::fromMap($map['AlertList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Datapoints'])) {
            $model->datapoints = datapoints::fromMap($map['Datapoints']);
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
