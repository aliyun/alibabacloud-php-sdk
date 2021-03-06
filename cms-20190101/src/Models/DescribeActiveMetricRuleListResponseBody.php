<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\alertList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponseBody\datapoints;
use AlibabaCloud\Tea\Model;

class DescribeActiveMetricRuleListResponseBody extends Model
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
     * @var alertList
     */
    public $alertList;

    /**
     * @var datapoints
     */
    public $datapoints;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'alertList'  => 'AlertList',
        'datapoints' => 'Datapoints',
        'code'       => 'Code',
        'success'    => 'Success',
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
        if (null !== $this->alertList) {
            $res['AlertList'] = null !== $this->alertList ? $this->alertList->toMap() : null;
        }
        if (null !== $this->datapoints) {
            $res['Datapoints'] = null !== $this->datapoints ? $this->datapoints->toMap() : null;
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
     * @return DescribeActiveMetricRuleListResponseBody
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
        if (isset($map['AlertList'])) {
            $model->alertList = alertList::fromMap($map['AlertList']);
        }
        if (isset($map['Datapoints'])) {
            $model->datapoints = datapoints::fromMap($map['Datapoints']);
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
