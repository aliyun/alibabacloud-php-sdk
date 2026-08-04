<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class CreateAgAccountRequest extends Model
{
    /**
     * @var string
     */
    public $loginEmail;

    /**
     * @var string
     */
    public $mpk;

    /**
     * @var string
     */
    public $nationCode;

    /**
     * @var string
     */
    public $own;

    /**
     * @var string
     */
    public $realParentPk;

    /**
     * @var string
     */
    public $securityMobile;

    /**
     * @var string
     */
    public $showNickName;

    /**
     * @var string
     */
    public $siteNick;

    /**
     * @var string
     */
    public $srcAccountInfo;
    protected $_name = [
        'loginEmail' => 'LoginEmail',
        'mpk' => 'Mpk',
        'nationCode' => 'NationCode',
        'own' => 'Own',
        'realParentPk' => 'RealParentPk',
        'securityMobile' => 'SecurityMobile',
        'showNickName' => 'ShowNickName',
        'siteNick' => 'SiteNick',
        'srcAccountInfo' => 'srcAccountInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loginEmail) {
            $res['LoginEmail'] = $this->loginEmail;
        }

        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }

        if (null !== $this->nationCode) {
            $res['NationCode'] = $this->nationCode;
        }

        if (null !== $this->own) {
            $res['Own'] = $this->own;
        }

        if (null !== $this->realParentPk) {
            $res['RealParentPk'] = $this->realParentPk;
        }

        if (null !== $this->securityMobile) {
            $res['SecurityMobile'] = $this->securityMobile;
        }

        if (null !== $this->showNickName) {
            $res['ShowNickName'] = $this->showNickName;
        }

        if (null !== $this->siteNick) {
            $res['SiteNick'] = $this->siteNick;
        }

        if (null !== $this->srcAccountInfo) {
            $res['srcAccountInfo'] = $this->srcAccountInfo;
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
        if (isset($map['LoginEmail'])) {
            $model->loginEmail = $map['LoginEmail'];
        }

        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }

        if (isset($map['NationCode'])) {
            $model->nationCode = $map['NationCode'];
        }

        if (isset($map['Own'])) {
            $model->own = $map['Own'];
        }

        if (isset($map['RealParentPk'])) {
            $model->realParentPk = $map['RealParentPk'];
        }

        if (isset($map['SecurityMobile'])) {
            $model->securityMobile = $map['SecurityMobile'];
        }

        if (isset($map['ShowNickName'])) {
            $model->showNickName = $map['ShowNickName'];
        }

        if (isset($map['SiteNick'])) {
            $model->siteNick = $map['SiteNick'];
        }

        if (isset($map['srcAccountInfo'])) {
            $model->srcAccountInfo = $map['srcAccountInfo'];
        }

        return $model;
    }
}
