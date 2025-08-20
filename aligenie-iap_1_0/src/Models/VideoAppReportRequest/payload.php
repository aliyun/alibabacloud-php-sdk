<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\VideoAppReportRequest;

use AlibabaCloud\Dara\Model;

class payload extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $isLogin;

    /**
     * @var bool
     */
    public $isVip;

    /**
     * @var string
     */
    public $loginNick;

    /**
     * @var string
     */
    public $originUuid;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'endTime',
        'isLogin' => 'isLogin',
        'isVip' => 'isVip',
        'loginNick' => 'loginNick',
        'originUuid' => 'originUuid',
        'phone' => 'phone',
        'pkgName' => 'pkgName',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->isLogin) {
            $res['isLogin'] = $this->isLogin;
        }

        if (null !== $this->isVip) {
            $res['isVip'] = $this->isVip;
        }

        if (null !== $this->loginNick) {
            $res['loginNick'] = $this->loginNick;
        }

        if (null !== $this->originUuid) {
            $res['originUuid'] = $this->originUuid;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->pkgName) {
            $res['pkgName'] = $this->pkgName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['isLogin'])) {
            $model->isLogin = $map['isLogin'];
        }

        if (isset($map['isVip'])) {
            $model->isVip = $map['isVip'];
        }

        if (isset($map['loginNick'])) {
            $model->loginNick = $map['loginNick'];
        }

        if (isset($map['originUuid'])) {
            $model->originUuid = $map['originUuid'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['pkgName'])) {
            $model->pkgName = $map['pkgName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
