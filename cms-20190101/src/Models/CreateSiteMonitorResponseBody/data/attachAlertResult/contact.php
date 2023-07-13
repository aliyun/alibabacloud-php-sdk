<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\data\attachAlertResult;

use AlibabaCloud\Tea\Model;

class contact extends Model
{
    /**
     * @description The status code that is returned after you associate the existing alert rule with the site monitoring task.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The following tables describe the extended options of the HTTP, HTTPS, PING, TCP, UDP, DNS, SMTP. POP3, and FTP protocols specified by the TaskType parameter.
     *
     * If the response_format parameter is set to another value, the value of the response_content parameter is parsed as a regular string. |
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Creates a site monitoring task.
     *
     * @example 5dd33455-4f65-4b0c-9200-33d66f3f340b
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SystemDefault_acs_ecs_dashboard_InternetOutRate_Percent
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'ruleId'    => 'RuleId',
        'success'   => 'Success',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
