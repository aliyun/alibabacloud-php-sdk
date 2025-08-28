<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeIntranetAttributeResponseBody extends Model
{
    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $bandwidthExpireTime;

    /**
     * @var string
     */
    public $bandwidthPrePaid;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var bool
     */
    public $hasPrePaidBandWidthOrderRunning;

    /**
     * @var int
     */
    public $intranetBandwidth;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoRenewal' => 'AutoRenewal',
        'bandwidthExpireTime' => 'BandwidthExpireTime',
        'bandwidthPrePaid' => 'BandwidthPrePaid',
        'expireTime' => 'ExpireTime',
        'hasPrePaidBandWidthOrderRunning' => 'HasPrePaidBandWidthOrderRunning',
        'intranetBandwidth' => 'IntranetBandwidth',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->bandwidthExpireTime) {
            $res['BandwidthExpireTime'] = $this->bandwidthExpireTime;
        }

        if (null !== $this->bandwidthPrePaid) {
            $res['BandwidthPrePaid'] = $this->bandwidthPrePaid;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->hasPrePaidBandWidthOrderRunning) {
            $res['HasPrePaidBandWidthOrderRunning'] = $this->hasPrePaidBandWidthOrderRunning;
        }

        if (null !== $this->intranetBandwidth) {
            $res['IntranetBandwidth'] = $this->intranetBandwidth;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }

        if (isset($map['BandwidthExpireTime'])) {
            $model->bandwidthExpireTime = $map['BandwidthExpireTime'];
        }

        if (isset($map['BandwidthPrePaid'])) {
            $model->bandwidthPrePaid = $map['BandwidthPrePaid'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['HasPrePaidBandWidthOrderRunning'])) {
            $model->hasPrePaidBandWidthOrderRunning = $map['HasPrePaidBandWidthOrderRunning'];
        }

        if (isset($map['IntranetBandwidth'])) {
            $model->intranetBandwidth = $map['IntranetBandwidth'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
