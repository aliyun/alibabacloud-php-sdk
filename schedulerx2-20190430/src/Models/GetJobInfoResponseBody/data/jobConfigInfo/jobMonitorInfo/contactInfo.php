<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo\jobMonitorInfo;

use AlibabaCloud\Dara\Model;

class contactInfo extends Model
{
    /**
     * @var string
     */
    public $ding;

    /**
     * @var string
     */
    public $userMail;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $userPhone;
    protected $_name = [
        'ding' => 'Ding',
        'userMail' => 'UserMail',
        'userName' => 'UserName',
        'userPhone' => 'UserPhone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
