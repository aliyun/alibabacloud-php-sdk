<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateIDEEventResultRequest extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $checkResult;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $checkResultTip;

    /**
     * @example 8abcb91f-d266-4073-b907-2ed670378ed1
     *
     * @var string
     */
    public $extensionCode;

    /**
     * @description 扩展点消息UUID
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
