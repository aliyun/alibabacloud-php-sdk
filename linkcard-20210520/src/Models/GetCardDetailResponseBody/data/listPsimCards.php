<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\GetCardDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class listPsimCards extends Model
{
    /**
     * @example cmiot
     *
     * @var string
     */
    public $apnName;

    /**
     * @example 2
     *
     * @var string
     */
    public $certifyStatus;

    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @var string[]
     */
    public $imsi;

    /**
     * @var string[]
     */
    public $ip;

    /**
     * @var string[]
     */
    public $msisdn;

    /**
     * @example true
     *
     * @var bool
     */
    public $openSms;

    /**
     * @example 300
     *
     * @var string
     */
    public $osStatus;

    /**
     * @example 130.00MB
     *
     * @var string
     */
    public $periodAddFlow;

    /**
     * @example 0
     *
     * @var string
     */
    public $periodSmsUse;

    /**
     * @example *.2.*.4
     *
     * @var string
     */
    public $privateNetworkSegment;

    /**
     * @example 35
     *
     * @var string
     */
    public $status;

    /**
     * @example CMCC
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'apnName'               => 'ApnName',
        'certifyStatus'         => 'CertifyStatus',
        'iccid'                 => 'Iccid',
        'imsi'                  => 'Imsi',
        'ip'                    => 'Ip',
        'msisdn'                => 'Msisdn',
        'openSms'               => 'OpenSms',
        'osStatus'              => 'OsStatus',
        'periodAddFlow'         => 'PeriodAddFlow',
        'periodSmsUse'          => 'PeriodSmsUse',
        'privateNetworkSegment' => 'PrivateNetworkSegment',
        'status'                => 'Status',
        'vendor'                => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apnName) {
            $res['ApnName'] = $this->apnName;
        }
        if (null !== $this->certifyStatus) {
            $res['CertifyStatus'] = $this->certifyStatus;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->imsi) {
            $res['Imsi'] = $this->imsi;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->msisdn) {
            $res['Msisdn'] = $this->msisdn;
        }
        if (null !== $this->openSms) {
            $res['OpenSms'] = $this->openSms;
        }
        if (null !== $this->osStatus) {
            $res['OsStatus'] = $this->osStatus;
        }
        if (null !== $this->periodAddFlow) {
            $res['PeriodAddFlow'] = $this->periodAddFlow;
        }
        if (null !== $this->periodSmsUse) {
            $res['PeriodSmsUse'] = $this->periodSmsUse;
        }
        if (null !== $this->privateNetworkSegment) {
            $res['PrivateNetworkSegment'] = $this->privateNetworkSegment;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listPsimCards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApnName'])) {
            $model->apnName = $map['ApnName'];
        }
        if (isset($map['CertifyStatus'])) {
            $model->certifyStatus = $map['CertifyStatus'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Imsi'])) {
            if (!empty($map['Imsi'])) {
                $model->imsi = $map['Imsi'];
            }
        }
        if (isset($map['Ip'])) {
            if (!empty($map['Ip'])) {
                $model->ip = $map['Ip'];
            }
        }
        if (isset($map['Msisdn'])) {
            if (!empty($map['Msisdn'])) {
                $model->msisdn = $map['Msisdn'];
            }
        }
        if (isset($map['OpenSms'])) {
            $model->openSms = $map['OpenSms'];
        }
        if (isset($map['OsStatus'])) {
            $model->osStatus = $map['OsStatus'];
        }
        if (isset($map['PeriodAddFlow'])) {
            $model->periodAddFlow = $map['PeriodAddFlow'];
        }
        if (isset($map['PeriodSmsUse'])) {
            $model->periodSmsUse = $map['PeriodSmsUse'];
        }
        if (isset($map['PrivateNetworkSegment'])) {
            $model->privateNetworkSegment = $map['PrivateNetworkSegment'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
