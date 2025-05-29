<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\configInfo;

use AlibabaCloud\Dara\Model;

class networkConfig extends Model
{
    /**
     * @var string
     */
    public $bandwidthStatus;

    /**
     * @var int
     */
    public $maxEgressBandwidth;

    /**
     * @var int
     */
    public $maxIngressBandwidth;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'bandwidthStatus' => 'BandwidthStatus',
        'maxEgressBandwidth' => 'MaxEgressBandwidth',
        'maxIngressBandwidth' => 'MaxIngressBandwidth',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthStatus) {
            $res['BandwidthStatus'] = $this->bandwidthStatus;
        }

        if (null !== $this->maxEgressBandwidth) {
            $res['MaxEgressBandwidth'] = $this->maxEgressBandwidth;
        }

        if (null !== $this->maxIngressBandwidth) {
            $res['MaxIngressBandwidth'] = $this->maxIngressBandwidth;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['BandwidthStatus'])) {
            $model->bandwidthStatus = $map['BandwidthStatus'];
        }

        if (isset($map['MaxEgressBandwidth'])) {
            $model->maxEgressBandwidth = $map['MaxEgressBandwidth'];
        }

        if (isset($map['MaxIngressBandwidth'])) {
            $model->maxIngressBandwidth = $map['MaxIngressBandwidth'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
