<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class Quota extends Model
{
    /**
     * @description 集群id
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 集群名称
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description 是否是独占Quota组
     *
     * @var bool
     */
    public $isExclusiveQuota;

    /**
     * @description 资源配额id
     *
     * @var string
     */
    public $quotaId;

    /**
     * @description 资源配额名称
     *
     * @var string
     */
    public $quotaName;

    /**
     * @description 资源配额类型
     *
     * @var string
     */
    public $quotaType;

    /**
     * @description 资源总量
     *
     * @var QuotaDetail
     */
    public $totalQuota;

    /**
     * @description 资源用量
     *
     * @var QuotaDetail
     */
    public $usedQuota;
    protected $_name = [
        'clusterId'        => 'ClusterId',
        'clusterName'      => 'ClusterName',
        'isExclusiveQuota' => 'IsExclusiveQuota',
        'quotaId'          => 'QuotaId',
        'quotaName'        => 'QuotaName',
        'quotaType'        => 'QuotaType',
        'totalQuota'       => 'TotalQuota',
        'usedQuota'        => 'UsedQuota',
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
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = null !== $this->totalQuota ? $this->totalQuota->toMap() : null;
        }
        if (null !== $this->usedQuota) {
            $res['UsedQuota'] = null !== $this->usedQuota ? $this->usedQuota->toMap() : null;
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
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = QuotaDetail::fromMap($map['TotalQuota']);
        }
        if (isset($map['UsedQuota'])) {
            $model->usedQuota = QuotaDetail::fromMap($map['UsedQuota']);
        }

        return $model;
    }
}
