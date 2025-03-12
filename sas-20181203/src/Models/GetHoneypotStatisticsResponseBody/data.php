<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of honeypots.
     *
     * @example 20
     *
     * @var int
     */
    public $totalHoneypotCount;

    /**
     * @description The health status of the management node. Valid values:
     *
     *   1: normal
     *   2: abnormal
     *
     * @example 1
     *
     * @var int
     */
    public $totalNodeStatus;

    /**
     * @description The total number of authorized probes.
     *
     * @example 40
     *
     * @var int
     */
    public $totalProbeCount;

    /**
     * @description The number of deployed honeypots.
     *
     * @example 7
     *
     * @var int
     */
    public $usedHoneypotCount;

    /**
     * @description The number of deployed host probes.
     *
     * @example 9
     *
     * @var int
     */
    public $usedHostProbeCount;

    /**
     * @description The number of deployed probes.
     *
     * @example 15
     *
     * @var int
     */
    public $usedProbeCount;

    /**
     * @description The number of deployed VPC probes.
     *
     * @example 6
     *
     * @var int
     */
    public $usedVpcProbeCount;
    protected $_name = [
        'totalHoneypotCount' => 'TotalHoneypotCount',
        'totalNodeStatus'    => 'TotalNodeStatus',
        'totalProbeCount'    => 'TotalProbeCount',
        'usedHoneypotCount'  => 'UsedHoneypotCount',
        'usedHostProbeCount' => 'UsedHostProbeCount',
        'usedProbeCount'     => 'UsedProbeCount',
        'usedVpcProbeCount'  => 'UsedVpcProbeCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalHoneypotCount) {
            $res['TotalHoneypotCount'] = $this->totalHoneypotCount;
        }
        if (null !== $this->totalNodeStatus) {
            $res['TotalNodeStatus'] = $this->totalNodeStatus;
        }
        if (null !== $this->totalProbeCount) {
            $res['TotalProbeCount'] = $this->totalProbeCount;
        }
        if (null !== $this->usedHoneypotCount) {
            $res['UsedHoneypotCount'] = $this->usedHoneypotCount;
        }
        if (null !== $this->usedHostProbeCount) {
            $res['UsedHostProbeCount'] = $this->usedHostProbeCount;
        }
        if (null !== $this->usedProbeCount) {
            $res['UsedProbeCount'] = $this->usedProbeCount;
        }
        if (null !== $this->usedVpcProbeCount) {
            $res['UsedVpcProbeCount'] = $this->usedVpcProbeCount;
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
        if (isset($map['TotalHoneypotCount'])) {
            $model->totalHoneypotCount = $map['TotalHoneypotCount'];
        }
        if (isset($map['TotalNodeStatus'])) {
            $model->totalNodeStatus = $map['TotalNodeStatus'];
        }
        if (isset($map['TotalProbeCount'])) {
            $model->totalProbeCount = $map['TotalProbeCount'];
        }
        if (isset($map['UsedHoneypotCount'])) {
            $model->usedHoneypotCount = $map['UsedHoneypotCount'];
        }
        if (isset($map['UsedHostProbeCount'])) {
            $model->usedHostProbeCount = $map['UsedHostProbeCount'];
        }
        if (isset($map['UsedProbeCount'])) {
            $model->usedProbeCount = $map['UsedProbeCount'];
        }
        if (isset($map['UsedVpcProbeCount'])) {
            $model->usedVpcProbeCount = $map['UsedVpcProbeCount'];
        }

        return $model;
    }
}
