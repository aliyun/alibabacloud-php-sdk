<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class SendAsyncEmailCaptchaRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $contactInfo;

    /**
     * @var string
     */
    public $contactorId;
    protected $_name = [
        'appName' => 'AppName',
        'contactInfo' => 'ContactInfo',
        'contactorId' => 'ContactorId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->contactInfo) {
            $res['ContactInfo'] = $this->contactInfo;
        }

        if (null !== $this->contactorId) {
            $res['ContactorId'] = $this->contactorId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ContactInfo'])) {
            $model->contactInfo = $map['ContactInfo'];
        }

        if (isset($map['ContactorId'])) {
            $model->contactorId = $map['ContactorId'];
        }

        return $model;
    }
}
