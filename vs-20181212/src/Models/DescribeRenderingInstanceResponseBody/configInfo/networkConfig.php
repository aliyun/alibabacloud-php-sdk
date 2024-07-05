<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\configInfo;

use AlibabaCloud\Tea\Model;

class networkConfig extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $bandwidthStatus;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxEgressBandwidth;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxIngressBandwidth;

    /**
     * @example 2023-08-17T09:54:35Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'bandwidthStatus'     => 'BandwidthStatus',
        'maxEgressBandwidth'  => 'MaxEgressBandwidth',
        'maxIngressBandwidth' => 'MaxIngressBandwidth',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return networkConfig
     */
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
