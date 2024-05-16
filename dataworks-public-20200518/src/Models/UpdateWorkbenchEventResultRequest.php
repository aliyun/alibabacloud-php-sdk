<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkbenchEventResultRequest extends Model
{
    /**
     * @description The check status of the extension point event. Valid values: OK and Fail. A value of OK indicates that the event passes the check. A value of FAIL indicates that the event fails to pass the check.
     *
     * This parameter is required.
     * @example FAIL
     *
     * @var string
     */
    public $checkResult;

    /**
     * @description The cause of the check failure.
     *
     * @example 注意节点有效期
     *
     * @var string
     */
    public $checkResultTip;

    /**
     * @description The code of the extension.
     *
     * This parameter is required.
     * @example 58e95e2acd6f408e8707f1bf2591f9e9
     *
     * @var string
     */
    public $extensionCode;

    /**
     * @description The ID of the message received when the related extension point event is triggered after you enable message subscription by using the OpenEvent module.
     *
     * This parameter is required.
     * @example 03400b03-b721-4c34-8727-2d6884077091
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
     * @return UpdateWorkbenchEventResultRequest
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
