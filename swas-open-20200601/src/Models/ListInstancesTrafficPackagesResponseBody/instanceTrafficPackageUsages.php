<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListInstancesTrafficPackagesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceTrafficPackageUsages extends Model
{
    /**
     * @description The ID of the simple application server.
     *
     * @example ccscqwqwqqqw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The data transfers that exceeds the quota of the data transfer plan in the current month. Unit: Byte.
     *
     * @example 0
     *
     * @var int
     */
    public $trafficOverflow;

    /**
     * @description The unused quota of the data transfer plan in the current month. Unit: Byte.
     *
     * @example 10000
     *
     * @var int
     */
    public $trafficPackageRemaining;

    /**
     * @description The quota of the data transfer plan in the current month. Unit: Byte.
     *
     * >  TrafficPackageTotal = TrafficUsed + TrafficPackageRemaining
     * @example 20000
     *
     * @var int
     */
    public $trafficPackageTotal;

    /**
     * @description The used quota of the data transfer plan in the current month. Unit: Byte.
     *
     * @example 10000
     *
     * @var int
     */
    public $trafficUsed;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'trafficOverflow'         => 'TrafficOverflow',
        'trafficPackageRemaining' => 'TrafficPackageRemaining',
        'trafficPackageTotal'     => 'TrafficPackageTotal',
        'trafficUsed'             => 'TrafficUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->trafficOverflow) {
            $res['TrafficOverflow'] = $this->trafficOverflow;
        }
        if (null !== $this->trafficPackageRemaining) {
            $res['TrafficPackageRemaining'] = $this->trafficPackageRemaining;
        }
        if (null !== $this->trafficPackageTotal) {
            $res['TrafficPackageTotal'] = $this->trafficPackageTotal;
        }
        if (null !== $this->trafficUsed) {
            $res['TrafficUsed'] = $this->trafficUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTrafficPackageUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TrafficOverflow'])) {
            $model->trafficOverflow = $map['TrafficOverflow'];
        }
        if (isset($map['TrafficPackageRemaining'])) {
            $model->trafficPackageRemaining = $map['TrafficPackageRemaining'];
        }
        if (isset($map['TrafficPackageTotal'])) {
            $model->trafficPackageTotal = $map['TrafficPackageTotal'];
        }
        if (isset($map['TrafficUsed'])) {
            $model->trafficUsed = $map['TrafficUsed'];
        }

        return $model;
    }
}
