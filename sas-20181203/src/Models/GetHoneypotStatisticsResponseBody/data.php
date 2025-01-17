<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetHoneypotStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalHoneypotCount;
    /**
     * @var int
     */
    public $totalNodeStatus;
    /**
     * @var int
     */
    public $totalProbeCount;
    /**
     * @var int
     */
    public $usedHoneypotCount;
    /**
     * @var int
     */
    public $usedHostProbeCount;
    /**
     * @var int
     */
    public $usedProbeCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
