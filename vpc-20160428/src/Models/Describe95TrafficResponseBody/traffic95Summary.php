<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary\traffic95DetailList;
use AlibabaCloud\Tea\Model;

class traffic95Summary extends Model
{
    /**
     * @description The peak bandwidth of the Internet Shared Bandwidth instance. Unit: Mbit/s.
     *
     * @example 20000.0
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The daily peak bandwidth. Unit: Mbit/s. For more information, see [Daily peak bandwidth](~~89729~~).
     *
     * @example 1064.244837773641
     *
     * @var string
     */
    public $fifthPeakBandwidth;

    /**
     * @description The resource ID.
     *
     * @example cbwp-wz9j19xrwf78fvz7*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The metering method of the Internet Shared Bandwidth instance. Valid values:
     *
     *   PayBy95: pay-by-enhanced-95th-percentile
     *   PayByBandwidth: pay-by-bandwidth
     *   PayByDominantTraffic: pay-by-dominant-traffic
     *
     * @example PayBy95
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The guaranteed bandwidth of the Internet Shared Bandwidth instance. Unit: Mbit/s.
     *
     * @example 0.0
     *
     * @var string
     */
    public $minimumConsumeBandwidth;

    /**
     * @description The average bandwidth every 5 minutes in the inbound and outbound directions.
     *
     * @var traffic95DetailList
     */
    public $traffic95DetailList;
    protected $_name = [
        'bandwidth'               => 'Bandwidth',
        'fifthPeakBandwidth'      => 'FifthPeakBandwidth',
        'instanceId'              => 'InstanceId',
        'internetChargeType'      => 'InternetChargeType',
        'minimumConsumeBandwidth' => 'MinimumConsumeBandwidth',
        'traffic95DetailList'     => 'Traffic95DetailList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->fifthPeakBandwidth) {
            $res['FifthPeakBandwidth'] = $this->fifthPeakBandwidth;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->minimumConsumeBandwidth) {
            $res['MinimumConsumeBandwidth'] = $this->minimumConsumeBandwidth;
        }
        if (null !== $this->traffic95DetailList) {
            $res['Traffic95DetailList'] = null !== $this->traffic95DetailList ? $this->traffic95DetailList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return traffic95Summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['FifthPeakBandwidth'])) {
            $model->fifthPeakBandwidth = $map['FifthPeakBandwidth'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['MinimumConsumeBandwidth'])) {
            $model->minimumConsumeBandwidth = $map['MinimumConsumeBandwidth'];
        }
        if (isset($map['Traffic95DetailList'])) {
            $model->traffic95DetailList = traffic95DetailList::fromMap($map['Traffic95DetailList']);
        }

        return $model;
    }
}
