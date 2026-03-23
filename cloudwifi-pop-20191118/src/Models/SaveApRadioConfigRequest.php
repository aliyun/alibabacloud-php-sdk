<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class SaveApRadioConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $bcastRate;

    /**
     * @var int
     */
    public $beaconInt;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $disabled;

    /**
     * @var int
     */
    public $frag;

    /**
     * @var string
     */
    public $htmode;

    /**
     * @var string
     */
    public $hwmode;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $mcastRate;

    /**
     * @var int
     */
    public $mgmtRate;

    /**
     * @var int
     */
    public $minrate;

    /**
     * @var string
     */
    public $noscan;

    /**
     * @var string
     */
    public $probereq;

    /**
     * @var string
     */
    public $requireMode;

    /**
     * @var int
     */
    public $rts;

    /**
     * @var string
     */
    public $shortgi;

    /**
     * @var string
     */
    public $txpower;

    /**
     * @var int
     */
    public $uapsd;
    protected $_name = [
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'bcastRate' => 'BcastRate',
        'beaconInt' => 'BeaconInt',
        'channel' => 'Channel',
        'disabled' => 'Disabled',
        'frag' => 'Frag',
        'htmode' => 'Htmode',
        'hwmode' => 'Hwmode',
        'id' => 'Id',
        'mcastRate' => 'McastRate',
        'mgmtRate' => 'MgmtRate',
        'minrate' => 'Minrate',
        'noscan' => 'Noscan',
        'probereq' => 'Probereq',
        'requireMode' => 'RequireMode',
        'rts' => 'Rts',
        'shortgi' => 'Shortgi',
        'txpower' => 'Txpower',
        'uapsd' => 'Uapsd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->bcastRate) {
            $res['BcastRate'] = $this->bcastRate;
        }

        if (null !== $this->beaconInt) {
            $res['BeaconInt'] = $this->beaconInt;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }

        if (null !== $this->frag) {
            $res['Frag'] = $this->frag;
        }

        if (null !== $this->htmode) {
            $res['Htmode'] = $this->htmode;
        }

        if (null !== $this->hwmode) {
            $res['Hwmode'] = $this->hwmode;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mcastRate) {
            $res['McastRate'] = $this->mcastRate;
        }

        if (null !== $this->mgmtRate) {
            $res['MgmtRate'] = $this->mgmtRate;
        }

        if (null !== $this->minrate) {
            $res['Minrate'] = $this->minrate;
        }

        if (null !== $this->noscan) {
            $res['Noscan'] = $this->noscan;
        }

        if (null !== $this->probereq) {
            $res['Probereq'] = $this->probereq;
        }

        if (null !== $this->requireMode) {
            $res['RequireMode'] = $this->requireMode;
        }

        if (null !== $this->rts) {
            $res['Rts'] = $this->rts;
        }

        if (null !== $this->shortgi) {
            $res['Shortgi'] = $this->shortgi;
        }

        if (null !== $this->txpower) {
            $res['Txpower'] = $this->txpower;
        }

        if (null !== $this->uapsd) {
            $res['Uapsd'] = $this->uapsd;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BcastRate'])) {
            $model->bcastRate = $map['BcastRate'];
        }

        if (isset($map['BeaconInt'])) {
            $model->beaconInt = $map['BeaconInt'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }

        if (isset($map['Frag'])) {
            $model->frag = $map['Frag'];
        }

        if (isset($map['Htmode'])) {
            $model->htmode = $map['Htmode'];
        }

        if (isset($map['Hwmode'])) {
            $model->hwmode = $map['Hwmode'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['McastRate'])) {
            $model->mcastRate = $map['McastRate'];
        }

        if (isset($map['MgmtRate'])) {
            $model->mgmtRate = $map['MgmtRate'];
        }

        if (isset($map['Minrate'])) {
            $model->minrate = $map['Minrate'];
        }

        if (isset($map['Noscan'])) {
            $model->noscan = $map['Noscan'];
        }

        if (isset($map['Probereq'])) {
            $model->probereq = $map['Probereq'];
        }

        if (isset($map['RequireMode'])) {
            $model->requireMode = $map['RequireMode'];
        }

        if (isset($map['Rts'])) {
            $model->rts = $map['Rts'];
        }

        if (isset($map['Shortgi'])) {
            $model->shortgi = $map['Shortgi'];
        }

        if (isset($map['Txpower'])) {
            $model->txpower = $map['Txpower'];
        }

        if (isset($map['Uapsd'])) {
            $model->uapsd = $map['Uapsd'];
        }

        return $model;
    }
}
