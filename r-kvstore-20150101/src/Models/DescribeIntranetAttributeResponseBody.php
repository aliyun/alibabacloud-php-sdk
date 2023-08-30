<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeIntranetAttributeResponseBody extends Model
{
    /**
     * @description Indicates whether auto-renewal is enabled for the extra internal bandwidth that you purchased. Valid values:
     *
     *   **true**: Auto-renewal is enabled.
     *   **false**: Auto-renewal is disabled.
     *
     * > If no extra internal bandwidth is purchased, this parameter is not returned.
     * @example true
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description The expiration time of the purchased bandwidth. The time follows the ISO 8601 standard in the *yyyy-MM-dd* T *HH:mm:ss* Z format.
     *
     * > If no extra internal bandwidth is purchased, this parameter is not returned.
     * @example 2021-03-06T16:00:00Z
     *
     * @var string
     */
    public $bandwidthExpireTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $bandwidthPrePaid;

    /**
     * @description The time when the extra internal bandwidth that you purchased for temporary use expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * > If no extra internal bandwidth for temporary use is purchased or the extra internal bandwidth that you purchased for temporary use has expired, **0** is returned for this parameter.
     * @example 0
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description Specifies whether the instance has unexpired bandwidth plans. Valid values:
     *
     *   **true**: The instance has unexpired bandwidth plans.
     *   **false**: The instance does not have unexpired bandwidth plans.
     *
     * > If no extra internal bandwidth is purchased, this parameter is not returned.
     * @example true
     *
     * @var bool
     */
    public $hasPrePaidBandWidthOrderRunning;

    /**
     * @description The current internal bandwidth of the instance. Unit: Mbit/s.
     *
     * @example 102
     *
     * @var int
     */
    public $intranetBandwidth;

    /**
     * @description The ID of the request.
     *
     * @example 25D42CC3-FBA1-4AEC-BCE2-B8DD3137****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoRenewal'                     => 'AutoRenewal',
        'bandwidthExpireTime'             => 'BandwidthExpireTime',
        'bandwidthPrePaid'                => 'BandwidthPrePaid',
        'expireTime'                      => 'ExpireTime',
        'hasPrePaidBandWidthOrderRunning' => 'HasPrePaidBandWidthOrderRunning',
        'intranetBandwidth'               => 'IntranetBandwidth',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeIntranetAttributeResponseBody
     */
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
