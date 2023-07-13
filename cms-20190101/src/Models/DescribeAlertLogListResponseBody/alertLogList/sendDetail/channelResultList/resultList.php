<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail\channelResultList;

use AlibabaCloud\Tea\Model;

class resultList extends Model
{
    /**
     * @description The severity level and notification methods of the alert. Valid values:
     *
     *   P4: Alert notifications are sent by using emails and DingTalk chatbots.
     *
     * <!---->
     *
     *   OK: No alert is generated.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The name of the application group.
     *
     * @example { }
     *
     * @var string
     */
    public $detail;

    /**
     * @description The ID of the alert rule.
     *
     * For information about how to obtain the ID of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     * @example 0BDAF8A8-04DC-5F0C-90E4-724D42C4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The page number of the returned page.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the request.
     *
     * @var string[]
     */
    public $notifyTargetList;
    protected $_name = [
        'code'             => 'Code',
        'detail'           => 'Detail',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'notifyTargetList' => 'notifyTargetList',
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
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->notifyTargetList) {
            $res['notifyTargetList'] = $this->notifyTargetList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['notifyTargetList'])) {
            if (!empty($map['notifyTargetList'])) {
                $model->notifyTargetList = $map['notifyTargetList'];
            }
        }

        return $model;
    }
}
