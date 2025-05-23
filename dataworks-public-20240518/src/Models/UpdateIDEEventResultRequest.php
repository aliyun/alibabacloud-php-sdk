<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateIDEEventResultRequest extends Model
{
    /**
     * @var string
     */
    public $checkResult;

    /**
     * @var string
     */
    public $checkResultTip;

    /**
     * @var string
     */
    public $extensionCode;

    /**
     * @var string
     */
    public $messageId;
    protected $_name = [
        'checkResult' => 'CheckResult',
        'checkResultTip' => 'CheckResultTip',
        'extensionCode' => 'ExtensionCode',
        'messageId' => 'MessageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
