<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateIDEEventResultRequest extends Model
{
    /**
     * @description The check status of the extension point event. Valid values:
     *
     *   OK: The event passes the check.
     *   FAIL: The event fails to pass the check. You must check and handle the reported error at the earliest opportunity to ensure that your program is run as expected.
     *   WARN: The event passes the check, but an alert is reported.
     *
     * @example OK
     *
     * @var string
     */
    public $checkResult;

    /**
     * @description The summary information of the check result. The information is displayed in DataStudio. If an alert is reported or the event fails the check, you can troubleshoot errors based on the information.
     *
     * @example Succeeded
     *
     * @var string
     */
    public $checkResultTip;

    /**
     * @description The ID of the extension. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Extensions tab of the Open Platform page to view the ID.
     *
     * @example 8abcb91f-d266-4073-b907-2ed670378ed1
     *
     * @var string
     */
    public $extensionCode;

    /**
     * @description The ID of the message. You can obtain the ID from the received message when the extension point event is triggered.
     *
     * @example 8abcb91f-d266-4073-b907-2ed670378ed1
     *
     * @var string
     */
    public $messageId;
    protected $_name = [
        'checkResult'    => 'CheckResult',
        'checkResultTip' => 'CheckResultTip',
        'extensionCode'  => 'ExtensionCode',
        'messageId'      => 'MessageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->checkResultTip) {
            $res['CheckResultTip'] = $this->checkResultTip;
        }
        if (null !== $this->extensionCode) {
            $res['ExtensionCode'] = $this->extensionCode;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIDEEventResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['CheckResultTip'])) {
            $model->checkResultTip = $map['CheckResultTip'];
        }
        if (isset($map['ExtensionCode'])) {
            $model->extensionCode = $map['ExtensionCode'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        return $model;
    }
}
