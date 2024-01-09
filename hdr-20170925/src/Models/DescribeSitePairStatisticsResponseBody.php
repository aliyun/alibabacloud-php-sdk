<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairStatisticsResponseBody\primarySiteGatewayInfo;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairStatisticsResponseBody\primarySiteServers;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairStatisticsResponseBody\secondarySiteGatewayInfo;
use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairStatisticsResponseBody\secondarySiteServers;
use AlibabaCloud\Tea\Model;

class DescribeSitePairStatisticsResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @var primarySiteGatewayInfo
     */
    public $primarySiteGatewayInfo;

    /**
     * @var primarySiteServers
     */
    public $primarySiteServers;

    /**
     * @example C0D9AAEE-8A21-5693-BCBD-8548914E4F3B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var secondarySiteGatewayInfo
     */
    public $secondarySiteGatewayInfo;

    /**
     * @var secondarySiteServers
     */
    public $secondarySiteServers;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                     => 'Code',
        'message'                  => 'Message',
        'primarySiteGatewayInfo'   => 'PrimarySiteGatewayInfo',
        'primarySiteServers'       => 'PrimarySiteServers',
        'requestId'                => 'RequestId',
        'secondarySiteGatewayInfo' => 'SecondarySiteGatewayInfo',
        'secondarySiteServers'     => 'SecondarySiteServers',
        'success'                  => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->primarySiteGatewayInfo) {
            $res['PrimarySiteGatewayInfo'] = null !== $this->primarySiteGatewayInfo ? $this->primarySiteGatewayInfo->toMap() : null;
        }
        if (null !== $this->primarySiteServers) {
            $res['PrimarySiteServers'] = null !== $this->primarySiteServers ? $this->primarySiteServers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secondarySiteGatewayInfo) {
            $res['SecondarySiteGatewayInfo'] = null !== $this->secondarySiteGatewayInfo ? $this->secondarySiteGatewayInfo->toMap() : null;
        }
        if (null !== $this->secondarySiteServers) {
            $res['SecondarySiteServers'] = null !== $this->secondarySiteServers ? $this->secondarySiteServers->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSitePairStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PrimarySiteGatewayInfo'])) {
            $model->primarySiteGatewayInfo = primarySiteGatewayInfo::fromMap($map['PrimarySiteGatewayInfo']);
        }
        if (isset($map['PrimarySiteServers'])) {
            $model->primarySiteServers = primarySiteServers::fromMap($map['PrimarySiteServers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecondarySiteGatewayInfo'])) {
            $model->secondarySiteGatewayInfo = secondarySiteGatewayInfo::fromMap($map['SecondarySiteGatewayInfo']);
        }
        if (isset($map['SecondarySiteServers'])) {
            $model->secondarySiteServers = secondarySiteServers::fromMap($map['SecondarySiteServers']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
