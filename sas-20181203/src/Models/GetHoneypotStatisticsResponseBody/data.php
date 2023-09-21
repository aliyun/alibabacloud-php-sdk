<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $totalHoneypotCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalNodeStatus;

    /**
     * @example 40
     *
     * @var int
     */
    public $totalProbeCount;

    /**
     * @example 7
     *
     * @var int
     */
    public $usedHoneypotCount;

    /**
     * @example 9
     *
     * @var int
     */
    public $usedHostProbeCount;

    /**
     * @example 15
     *
     * @var int
     */
    public $usedProbeCount;

    /**
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
