<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribePostpayEnabledProtectionResponseBody extends Model
{
    /**
     * @var int
     */
    public $disabledDays;

    /**
     * @var string
     */
    public $disabledType;

    /**
     * @var bool
     */
    public $isEnabledProtection;

    /**
     * @var bool
     */
    public $isOpenButDisabled;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'disabledDays' => 'DisabledDays',
        'disabledType' => 'DisabledType',
        'isEnabledProtection' => 'IsEnabledProtection',
        'isOpenButDisabled' => 'IsOpenButDisabled',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disabledDays) {
            $res['DisabledDays'] = $this->disabledDays;
        }

        if (null !== $this->disabledType) {
            $res['DisabledType'] = $this->disabledType;
        }

        if (null !== $this->isEnabledProtection) {
            $res['IsEnabledProtection'] = $this->isEnabledProtection;
        }

        if (null !== $this->isOpenButDisabled) {
            $res['IsOpenButDisabled'] = $this->isOpenButDisabled;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DisabledDays'])) {
            $model->disabledDays = $map['DisabledDays'];
        }

        if (isset($map['DisabledType'])) {
            $model->disabledType = $map['DisabledType'];
        }

        if (isset($map['IsEnabledProtection'])) {
            $model->isEnabledProtection = $map['IsEnabledProtection'];
        }

        if (isset($map['IsOpenButDisabled'])) {
            $model->isOpenButDisabled = $map['IsOpenButDisabled'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
