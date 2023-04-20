<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models\GetRealTimeRiskInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 360market
     *
     * @var string
     */
    public $appChannel;

    /**
     * @example 1
     *
     * @var string
     */
    public $fakeDevice;

    /**
     * @example 00000000-0000-0000-0000-000000000000
     *
     * @var string
     */
    public $idfa;

    /**
     * @example sf58rw7erdfdgdgseeg2434
     *
     * @var string
     */
    public $oaid;

    /**
     * @example 0
     *
     * @var string
     */
    public $proxyDevice;

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
     * @example 815E045B-4A9E-AA76-BEFF-048C9B9F651A
     *
     * @var string
     */
    public $zid;
    protected $_name = [
        'appChannel'  => 'appChannel',
        'fakeDevice'  => 'fakeDevice',
        'idfa'        => 'idfa',
        'oaid'        => 'oaid',
        'proxyDevice' => 'proxyDevice',
        'riskLevel'   => 'riskLevel',
        'riskScore'   => 'riskScore',
        'zid'         => 'zid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appChannel) {
            $res['appChannel'] = $this->appChannel;
        }
        if (null !== $this->fakeDevice) {
            $res['fakeDevice'] = $this->fakeDevice;
        }
        if (null !== $this->idfa) {
            $res['idfa'] = $this->idfa;
        }
        if (null !== $this->oaid) {
            $res['oaid'] = $this->oaid;
        }
        if (null !== $this->proxyDevice) {
            $res['proxyDevice'] = $this->proxyDevice;
        }
        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskScore) {
            $res['riskScore'] = $this->riskScore;
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
        if (isset($map['appChannel'])) {
            $model->appChannel = $map['appChannel'];
        }
        if (isset($map['fakeDevice'])) {
            $model->fakeDevice = $map['fakeDevice'];
        }
        if (isset($map['idfa'])) {
            $model->idfa = $map['idfa'];
        }
        if (isset($map['oaid'])) {
            $model->oaid = $map['oaid'];
        }
        if (isset($map['proxyDevice'])) {
            $model->proxyDevice = $map['proxyDevice'];
        }
        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }
        if (isset($map['riskScore'])) {
            $model->riskScore = $map['riskScore'];
        }
        if (isset($map['zid'])) {
            $model->zid = $map['zid'];
        }

        return $model;
    }
}
