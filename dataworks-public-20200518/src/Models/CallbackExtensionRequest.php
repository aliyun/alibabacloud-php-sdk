<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CallbackExtensionRequest extends Model
{
    /**
     * @description The check message of the extension point event. If CheckResult is set to FAIL, you must provide the failure cause.
     *
     * @var string
     */
    public $checkMessage;

    /**
     * @description The check status of the extension point event. Valid values:
     *
     *   OK: The event passes the check.
     *   FAIL: The event fails to pass the check. You must check and handle the reported error at the earliest opportunity to ensure that your program is run as expected.
     *   WARN: The event passes the check, but an alert is reported.
     *
     * This parameter is required.
     * @example FAIL
     *
     * @var string
     */
    public $checkResult;

    /**
     * @description The unique code of the extension.
     *
     * This parameter is required.
     * @example 8abcb91f-d266-4073-b907-2ed670378ed1
     *
     * @var string
     */
    public $extensionCode;

    /**
     * @description The message ID in DataWorks OpenEvent. You can obtain the ID from a received message when an extension point event is triggered.
     *
     * This parameter is required.
     * @example 03400b03-b721-4c34-8727-2d6884077091
     *
     * @var string
     */
    public $messageId;
    protected $_name = [
        'checkMessage'  => 'CheckMessage',
        'checkResult'   => 'CheckResult',
        'extensionCode' => 'ExtensionCode',
        'messageId'     => 'MessageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkMessage) {
            $res['CheckMessage'] = $this->checkMessage;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
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
     * @return CallbackExtensionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckMessage'])) {
            $model->checkMessage = $map['CheckMessage'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
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
