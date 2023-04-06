<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models\GetZidTagScoreByAtokenResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description aHook
     *
     * @example 0
     *
     * @var string
     */
    public $aHook;

    /**
     * @example 1
     *
     * @var string
     */
    public $debug;

    /**
     * @example 1
     *
     * @var string
     */
    public $doubleOpen;

    /**
     * @description javaHook
     *
     * @example 0
     *
     * @var string
     */
    public $javaHook;

    /**
     * @example 0
     *
     * @var string
     */
    public $nativeHook;

    /**
     * @example RISK
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @example 60
     *
     * @var string
     */
    public $riskScore;

    /**
     * @example 0
     *
     * @var string
     */
    public $root;

    /**
     * @example 1
     *
     * @var string
     */
    public $simulator;

    /**
     * @example 0
     *
     * @var string
     */
    public $vpnProxy;

    /**
     * @example 0
     *
     * @var string
     */
    public $wifiProxy;

    /**
     * @example F6DD4AD2-B7B8-AA3A-34B8-EDE55FC82FC6
     *
     * @var string
     */
    public $zid;
    protected $_name = [
        'aHook'      => 'aHook',
        'debug'      => 'debug',
        'doubleOpen' => 'doubleOpen',
        'javaHook'   => 'javaHook',
        'nativeHook' => 'nativeHook',
        'riskLevel'  => 'riskLevel',
        'riskScore'  => 'riskScore',
        'root'       => 'root',
        'simulator'  => 'simulator',
        'vpnProxy'   => 'vpnProxy',
        'wifiProxy'  => 'wifiProxy',
        'zid'        => 'zid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aHook) {
            $res['aHook'] = $this->aHook;
        }
        if (null !== $this->debug) {
            $res['debug'] = $this->debug;
        }
        if (null !== $this->doubleOpen) {
            $res['doubleOpen'] = $this->doubleOpen;
        }
        if (null !== $this->javaHook) {
            $res['javaHook'] = $this->javaHook;
        }
        if (null !== $this->nativeHook) {
            $res['nativeHook'] = $this->nativeHook;
        }
        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskScore) {
            $res['riskScore'] = $this->riskScore;
        }
        if (null !== $this->root) {
            $res['root'] = $this->root;
        }
        if (null !== $this->simulator) {
            $res['simulator'] = $this->simulator;
        }
        if (null !== $this->vpnProxy) {
            $res['vpnProxy'] = $this->vpnProxy;
        }
        if (null !== $this->wifiProxy) {
            $res['wifiProxy'] = $this->wifiProxy;
        }
        if (null !== $this->zid) {
            $res['zid'] = $this->zid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aHook'])) {
            $model->aHook = $map['aHook'];
        }
        if (isset($map['debug'])) {
            $model->debug = $map['debug'];
        }
        if (isset($map['doubleOpen'])) {
            $model->doubleOpen = $map['doubleOpen'];
        }
        if (isset($map['javaHook'])) {
            $model->javaHook = $map['javaHook'];
        }
        if (isset($map['nativeHook'])) {
            $model->nativeHook = $map['nativeHook'];
        }
        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }
        if (isset($map['riskScore'])) {
            $model->riskScore = $map['riskScore'];
        }
        if (isset($map['root'])) {
            $model->root = $map['root'];
        }
        if (isset($map['simulator'])) {
            $model->simulator = $map['simulator'];
        }
        if (isset($map['vpnProxy'])) {
            $model->vpnProxy = $map['vpnProxy'];
        }
        if (isset($map['wifiProxy'])) {
            $model->wifiProxy = $map['wifiProxy'];
        }
        if (isset($map['zid'])) {
            $model->zid = $map['zid'];
        }

        return $model;
    }
}
