<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\Describe95TrafficResponseBody\traffic95Summary\traffic95DetailList;

class traffic95Summary extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $fifthPeakBandwidth;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $minimumConsumeBandwidth;

    /**
     * @var traffic95DetailList
     */
    public $traffic95DetailList;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'fifthPeakBandwidth' => 'FifthPeakBandwidth',
        'instanceId' => 'InstanceId',
        'internetChargeType' => 'InternetChargeType',
        'minimumConsumeBandwidth' => 'MinimumConsumeBandwidth',
        'traffic95DetailList' => 'Traffic95DetailList',
    ];

    public function validate()
    {
        if (null !== $this->traffic95DetailList) {
            $this->traffic95DetailList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Traffic95DetailList'] = null !== $this->traffic95DetailList ? $this->traffic95DetailList->toArray($noStream) : $this->traffic95DetailList;
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
