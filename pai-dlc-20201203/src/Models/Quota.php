<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class Quota extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var bool
     */
    public $enableTideResource;

    /**
     * @var bool
     */
    public $isExclusiveQuota;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var string
     */
    public $resourceLevel;

    /**
     * @var QuotaDetail
     */
    public $totalQuota;

    /**
     * @var QuotaDetail
     */
    public $totalTideQuota;

    /**
     * @var QuotaDetail
     */
    public $usedQuota;

    /**
     * @var QuotaDetail
     */
    public $usedTideQuota;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'clusterName'        => 'ClusterName',
        'enableTideResource' => 'EnableTideResource',
        'isExclusiveQuota'   => 'IsExclusiveQuota',
        'quotaId'            => 'QuotaId',
        'quotaName'          => 'QuotaName',
        'quotaType'          => 'QuotaType',
        'resourceLevel'      => 'ResourceLevel',
        'totalQuota'         => 'TotalQuota',
        'totalTideQuota'     => 'TotalTideQuota',
        'usedQuota'          => 'UsedQuota',
        'usedTideQuota'      => 'UsedTideQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->enableTideResource) {
            $res['EnableTideResource'] = $this->enableTideResource;
        }
        if (null !== $this->isExclusiveQuota) {
            $res['IsExclusiveQuota'] = $this->isExclusiveQuota;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }
        if (null !== $this->resourceLevel) {
            $res['ResourceLevel'] = $this->resourceLevel;
        }
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = null !== $this->totalQuota ? $this->totalQuota->toMap() : null;
        }
        if (null !== $this->totalTideQuota) {
            $res['TotalTideQuota'] = null !== $this->totalTideQuota ? $this->totalTideQuota->toMap() : null;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = null !== $this->usedQuota ? $this->usedQuota->toMap() : null;
        }
        if (null !== $this->usedTideQuota) {
            $res['UsedTideQuota'] = null !== $this->usedTideQuota ? $this->usedTideQuota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['EnableTideResource'])) {
            $model->enableTideResource = $map['EnableTideResource'];
        }
        if (isset($map['IsExclusiveQuota'])) {
            $model->isExclusiveQuota = $map['IsExclusiveQuota'];
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }
        if (isset($map['ResourceLevel'])) {
            $model->resourceLevel = $map['ResourceLevel'];
        }
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = QuotaDetail::fromMap($map['TotalQuota']);
        }
        if (isset($map['TotalTideQuota'])) {
            $model->totalTideQuota = QuotaDetail::fromMap($map['TotalTideQuota']);
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = QuotaDetail::fromMap($map['UsedQuota']);
        }
        if (isset($map['UsedTideQuota'])) {
            $model->usedTideQuota = QuotaDetail::fromMap($map['UsedTideQuota']);
        }

        return $model;
    }
}
