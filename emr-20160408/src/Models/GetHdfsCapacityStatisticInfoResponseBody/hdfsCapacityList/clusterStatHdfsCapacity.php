<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetHdfsCapacityStatisticInfoResponseBody\hdfsCapacityList;

use AlibabaCloud\Tea\Model;

class clusterStatHdfsCapacity extends Model
{
    /**
     * @var int
     */
    public $capacityRemaining;

    /**
     * @var int
     */
    public $capacityRemainingGB;

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
    public $capacityUsed;

    /**
     * @var int
     */
    public $capacityUsedGB;

    /**
     * @var int
     */
    public $capacityUsedNonDfs;

    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $dateTime;
    protected $_name = [
        'capacityRemaining'   => 'CapacityRemaining',
        'capacityRemainingGB' => 'CapacityRemainingGB',
        'capacityTotal'       => 'CapacityTotal',
        'capacityTotalGB'     => 'CapacityTotalGB',
        'capacityUsed'        => 'CapacityUsed',
        'capacityUsedGB'      => 'CapacityUsedGB',
        'capacityUsedNonDfs'  => 'CapacityUsedNonDfs',
        'clusterBizId'        => 'ClusterBizId',
        'dateTime'            => 'DateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacityRemaining) {
            $res['CapacityRemaining'] = $this->capacityRemaining;
        }
        if (null !== $this->capacityRemainingGB) {
            $res['CapacityRemainingGB'] = $this->capacityRemainingGB;
        }
        if (null !== $this->capacityTotal) {
            $res['CapacityTotal'] = $this->capacityTotal;
        }
        if (null !== $this->capacityTotalGB) {
            $res['CapacityTotalGB'] = $this->capacityTotalGB;
        }
        if (null !== $this->capacityUsed) {
            $res['CapacityUsed'] = $this->capacityUsed;
        }
        if (null !== $this->capacityUsedGB) {
            $res['CapacityUsedGB'] = $this->capacityUsedGB;
        }
        if (null !== $this->capacityUsedNonDfs) {
            $res['CapacityUsedNonDfs'] = $this->capacityUsedNonDfs;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
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
        if (isset($map['CapacityRemaining'])) {
            $model->capacityRemaining = $map['CapacityRemaining'];
        }
        if (isset($map['CapacityRemainingGB'])) {
            $model->capacityRemainingGB = $map['CapacityRemainingGB'];
        }
        if (isset($map['CapacityTotal'])) {
            $model->capacityTotal = $map['CapacityTotal'];
        }
        if (isset($map['CapacityTotalGB'])) {
            $model->capacityTotalGB = $map['CapacityTotalGB'];
        }
        if (isset($map['CapacityUsed'])) {
            $model->capacityUsed = $map['CapacityUsed'];
        }
        if (isset($map['CapacityUsedGB'])) {
            $model->capacityUsedGB = $map['CapacityUsedGB'];
        }
        if (isset($map['CapacityUsedNonDfs'])) {
            $model->capacityUsedNonDfs = $map['CapacityUsedNonDfs'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        return $model;
    }
}
