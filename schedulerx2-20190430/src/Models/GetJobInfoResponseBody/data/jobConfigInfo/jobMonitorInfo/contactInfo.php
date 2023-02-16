<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo\jobMonitorInfo;

use AlibabaCloud\Tea\Model;

class contactInfo extends Model
{
    /**
     * @description The webhook URL of the DingTalk chatbot.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=XXXXXX
     *
     * @var string
     */
    public $ding;

    /**
     * @description The email address of the user.
     *
     * @example user@demo.com
     *
     * @var string
     */
    public $userMail;

    /**
     * @description The name of the user.
     *
     * @example userA
     *
     * @var string
     */
    public $userName;

    /**
     * @description The mobile number of the user.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $userPhone;
    protected $_name = [
        'ding'      => 'Ding',
        'userMail'  => 'UserMail',
        'userName'  => 'UserName',
        'userPhone' => 'UserPhone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ding) {
            $res['Ding'] = $this->ding;
        }
        if (null !== $this->userMail) {
            $res['UserMail'] = $this->userMail;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userPhone) {
            $res['UserPhone'] = $this->userPhone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ding'])) {
            $model->ding = $map['Ding'];
        }
        if (isset($map['UserMail'])) {
            $model->userMail = $map['UserMail'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserPhone'])) {
            $model->userPhone = $map['UserPhone'];
        }

        return $model;
    }
}
