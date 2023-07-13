<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleListResponseBody\eventRules;
use AlibabaCloud\Tea\Model;

class DescribeEventRuleListResponseBody extends Model
{
    /**
     * @description The prefix in the name of the event-triggered alert rule.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The number of the page to return.
     *
     * Pages start from page 1. Default value: 1.
     * @var eventRules
     */
    public $eventRules;

    /**
     * @description The event-triggered alert rules.
     *
     * @example User not authorized to operate on the specified resource.
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the event-triggered alert rule.
     *
     * @example D0E6D82B-16B5-422A-8136-EE5BDC01E415
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The list of event names.
     *
     * @example 21
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'       => 'Code',
        'eventRules' => 'EventRules',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'total'      => 'Total',
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
        if (null !== $this->eventRules) {
            $res['EventRules'] = null !== $this->eventRules ? $this->eventRules->toMap() : null;
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventRuleListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EventRules'])) {
            $model->eventRules = eventRules::fromMap($map['EventRules']);
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
