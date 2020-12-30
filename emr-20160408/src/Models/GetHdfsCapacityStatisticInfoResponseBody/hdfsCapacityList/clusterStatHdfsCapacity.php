<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetHdfsCapacityStatisticInfoResponseBody\hdfsCapacityList;

use AlibabaCloud\Tea\Model;

class clusterStatHdfsCapacity extends Model
{
    /**
     * @var int
     */
    public $capacityUsedNonDfs;

    /**
     * @var int
     */
    public $capacityTotal;

    /**
     * @var int
     */
    public $capacityTotalGB;

    /**
     * @var int
     */
    public $capacityRemaining;

    /**
     * @var int
     */
    public $capacityUsed;

    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var int
     */
    public $capacityUsedGB;

    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var int
     */
    public $capacityRemainingGB;
    protected $_name = [
        'capacityUsedNonDfs'  => 'CapacityUsedNonDfs',
        'capacityTotal'       => 'CapacityTotal',
        'capacityTotalGB'     => 'CapacityTotalGB',
        'capacityRemaining'   => 'CapacityRemaining',
        'capacityUsed'        => 'CapacityUsed',
        'clusterBizId'        => 'ClusterBizId',
        'capacityUsedGB'      => 'CapacityUsedGB',
        'dateTime'            => 'DateTime',
        'capacityRemainingGB' => 'CapacityRemainingGB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityUsedNonDfs) {
            $res['CapacityUsedNonDfs'] = $this->capacityUsedNonDfs;
        }
        if (null !== $this->capacityTotal) {
            $res['CapacityTotal'] = $this->capacityTotal;
        }
        if (null !== $this->capacityTotalGB) {
            $res['CapacityTotalGB'] = $this->capacityTotalGB;
        }
        if (null !== $this->capacityRemaining) {
            $res['CapacityRemaining'] = $this->capacityRemaining;
        }
        if (null !== $this->capacityUsed) {
            $res['CapacityUsed'] = $this->capacityUsed;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->capacityUsedGB) {
            $res['CapacityUsedGB'] = $this->capacityUsedGB;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->capacityRemainingGB) {
            $res['CapacityRemainingGB'] = $this->capacityRemainingGB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatHdfsCapacity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CapacityUsedNonDfs'])) {
            $model->capacityUsedNonDfs = $map['CapacityUsedNonDfs'];
        }
        if (isset($map['CapacityTotal'])) {
            $model->capacityTotal = $map['CapacityTotal'];
        }
        if (isset($map['CapacityTotalGB'])) {
            $model->capacityTotalGB = $map['CapacityTotalGB'];
        }
        if (isset($map['CapacityRemaining'])) {
            $model->capacityRemaining = $map['CapacityRemaining'];
        }
        if (isset($map['CapacityUsed'])) {
            $model->capacityUsed = $map['CapacityUsed'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['CapacityUsedGB'])) {
            $model->capacityUsedGB = $map['CapacityUsedGB'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['CapacityRemainingGB'])) {
            $model->capacityRemainingGB = $map['CapacityRemainingGB'];
        }

        return $model;
    }
}
