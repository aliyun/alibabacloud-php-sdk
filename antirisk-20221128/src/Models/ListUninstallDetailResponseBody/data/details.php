<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models\ListUninstallDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @example 1700278078773
     *
     * @var string
     */
    public $activeDatetime;

    /**
     * @example 阳江市
     *
     * @var string
     */
    public $city;

    /**
     * @description deviceBrand
     *
     * @example HONOR
     *
     * @var string
     */
    public $deviceBrand;

    /**
     * @description deviceModel
     *
     * @example KOZ-AL00
     *
     * @var string
     */
    public $deviceModel;

    /**
     * @description firstActiveDatetime
     *
     * @example 2023-11-12 22:41:46
     *
     * @var string
     */
    public $firstActiveDatetime;

    /**
     * @description idfa
     *
     * @example 5ce253a8-2917-44da-a1fe-9d21051f9015
     *
     * @var string
     */
    public $idfa;

    /**
     * @description imei
     *
     * @example None
     *
     * @var string
     */
    public $imei;

    /**
     * @description installAppVersion
     *
     * @example 23.05.06
     *
     * @var string
     */
    public $installAppVersion;

    /**
     * @description installChannel
     *
     * @example umeng
     *
     * @var string
     */
    public $installChannel;

    /**
     * @description oaid
     *
     * @example ai357e2b5358797ddc
     *
     * @var string
     */
    public $oaid;

    /**
     * @description osVersion
     *
     * @example 10
     *
     * @var string
     */
    public $osVersion;

    /**
     * @description puid
     *
     * @example zhangfei
     *
     * @var string
     */
    public $puid;

    /**
     * @example ai357e2b5358797ddc1857a66deb6b5d14
     *
     * @var string
     */
    public $umid;

    /**
     * @example 3
     *
     * @var int
     */
    public $uninstallCount;

    /**
     * @example 20231118
     *
     * @var string
     */
    public $uninstallDatetime;

    /**
     * @description zid
     *
     * @example ddc1857a66deb6b5
     *
     * @var string
     */
    public $zid;
    protected $_name = [
        'activeDatetime'      => 'activeDatetime',
        'city'                => 'city',
        'deviceBrand'         => 'deviceBrand',
        'deviceModel'         => 'deviceModel',
        'firstActiveDatetime' => 'firstActiveDatetime',
        'idfa'                => 'idfa',
        'imei'                => 'imei',
        'installAppVersion'   => 'installAppVersion',
        'installChannel'      => 'installChannel',
        'oaid'                => 'oaid',
        'osVersion'           => 'osVersion',
        'puid'                => 'puid',
        'umid'                => 'umid',
        'uninstallCount'      => 'uninstallCount',
        'uninstallDatetime'   => 'uninstallDatetime',
        'zid'                 => 'zid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeDatetime) {
            $res['activeDatetime'] = $this->activeDatetime;
        }
        if (null !== $this->city) {
            $res['city'] = $this->city;
        }
        if (null !== $this->deviceBrand) {
            $res['deviceBrand'] = $this->deviceBrand;
        }
        if (null !== $this->deviceModel) {
            $res['deviceModel'] = $this->deviceModel;
        }
        if (null !== $this->firstActiveDatetime) {
            $res['firstActiveDatetime'] = $this->firstActiveDatetime;
        }
        if (null !== $this->idfa) {
            $res['idfa'] = $this->idfa;
        }
        if (null !== $this->imei) {
            $res['imei'] = $this->imei;
        }
        if (null !== $this->installAppVersion) {
            $res['installAppVersion'] = $this->installAppVersion;
        }
        if (null !== $this->installChannel) {
            $res['installChannel'] = $this->installChannel;
        }
        if (null !== $this->oaid) {
            $res['oaid'] = $this->oaid;
        }
        if (null !== $this->osVersion) {
            $res['osVersion'] = $this->osVersion;
        }
        if (null !== $this->puid) {
            $res['puid'] = $this->puid;
        }
        if (null !== $this->umid) {
            $res['umid'] = $this->umid;
        }
        if (null !== $this->uninstallCount) {
            $res['uninstallCount'] = $this->uninstallCount;
        }
        if (null !== $this->uninstallDatetime) {
            $res['uninstallDatetime'] = $this->uninstallDatetime;
        }
        if (null !== $this->zid) {
            $res['zid'] = $this->zid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activeDatetime'])) {
            $model->activeDatetime = $map['activeDatetime'];
        }
        if (isset($map['city'])) {
            $model->city = $map['city'];
        }
        if (isset($map['deviceBrand'])) {
            $model->deviceBrand = $map['deviceBrand'];
        }
        if (isset($map['deviceModel'])) {
            $model->deviceModel = $map['deviceModel'];
        }
        if (isset($map['firstActiveDatetime'])) {
            $model->firstActiveDatetime = $map['firstActiveDatetime'];
        }
        if (isset($map['idfa'])) {
            $model->idfa = $map['idfa'];
        }
        if (isset($map['imei'])) {
            $model->imei = $map['imei'];
        }
        if (isset($map['installAppVersion'])) {
            $model->installAppVersion = $map['installAppVersion'];
        }
        if (isset($map['installChannel'])) {
            $model->installChannel = $map['installChannel'];
        }
        if (isset($map['oaid'])) {
            $model->oaid = $map['oaid'];
        }
        if (isset($map['osVersion'])) {
            $model->osVersion = $map['osVersion'];
        }
        if (isset($map['puid'])) {
            $model->puid = $map['puid'];
        }
        if (isset($map['umid'])) {
            $model->umid = $map['umid'];
        }
        if (isset($map['uninstallCount'])) {
            $model->uninstallCount = $map['uninstallCount'];
        }
        if (isset($map['uninstallDatetime'])) {
            $model->uninstallDatetime = $map['uninstallDatetime'];
        }
        if (isset($map['zid'])) {
            $model->zid = $map['zid'];
        }

        return $model;
    }
}
