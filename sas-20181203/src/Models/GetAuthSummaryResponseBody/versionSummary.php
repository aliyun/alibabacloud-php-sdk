<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class versionSummary extends Model
{
    /**
     * @description The type of the quota that is consumed. Valid values:
     *
     *   ASSET: quota of servers.
     *   CORE: quota of server cores.
     *   ASSET_AND_CORE: both.
     *
     * @example ASSET
     *
     * @var string
     */
    public $authBindType;

    /**
     * @description The index of the current edition. The smaller the value, the higher the edition. The index is used for sorting.
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The total quota of server cores.
     *
     * >  This parameter takes effect only if AuthBindType is set to CORE or ASSET_AND_CORE.
     * @example 10
     *
     * @var int
     */
    public $totalCoreAuthCount;

    /**
     * @description The total quota of servers in the current edition.
     *
     * >  This parameter takes effect only if AuthBindType is set to ASSET or ASSET_AND_CORE.
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The total quota of servers.
     *
     * >  This parameter takes effect only if AuthBindType is set to ASSET or ASSET_AND_CORE.
     * @example 10
     *
     * @var int
     */
    public $totalEcsAuthCount;

    /**
     * @description The remaining quota of servers.
     *
     * >  This parameter takes effect only if AuthBindType is set to ASSET or ASSET_AND_CORE.
     * @example 10
     *
     * @var int
     */
    public $unUsedCount;

    /**
     * @description The remaining quota of server cores.
     *
     * >  This parameter takes effect only if AuthBindType is set to CORE or ASSET_AND_CORE.
     * @example 10
     *
     * @var int
     */
    public $unusedCoreAuthCount;

    /**
     * @description The remaining quota of servers.
     *
     * >  This parameter takes effect only if AuthBindType is set to ASSET or ASSET_AND_CORE.
     * @example 10
     *
     * @var int
     */
    public $unusedEcsAuthCount;

    /**
     * @description The consumed quota of server cores.
     *
     * >  This parameter takes effect only if AuthBindType is set to CORE or ASSET_AND_CORE.
     * @example 10
     *
     * @var int
     */
    public $usedCoreCount;

    /**
     * @description The used quota of servers.
     *
     * >  This parameter takes effect only if AuthBindType is set to ASSET or ASSET_AND_CORE.
     * @example 10
     *
     * @var int
     */
    public $usedEcsCount;

    /**
     * @description The edition of purchased Security Center. Valid values:
     *
     *   **1**: Basic edition
     *   **3**: Enterprise edition
     *   **5**: Advanced edition
     *   **6**: Anti-virus edition
     *   **7**: Ultimate edition
     *   **8**: Multi-edition
     *   **10**: Value-added Plan edition
     *
     * @example 3
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'authBindType'        => 'AuthBindType',
        'index'               => 'Index',
        'totalCoreAuthCount'  => 'TotalCoreAuthCount',
        'totalCount'          => 'TotalCount',
        'totalEcsAuthCount'   => 'TotalEcsAuthCount',
        'unUsedCount'         => 'UnUsedCount',
        'unusedCoreAuthCount' => 'UnusedCoreAuthCount',
        'unusedEcsAuthCount'  => 'UnusedEcsAuthCount',
        'usedCoreCount'       => 'UsedCoreCount',
        'usedEcsCount'        => 'UsedEcsCount',
        'version'             => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authBindType) {
            $res['AuthBindType'] = $this->authBindType;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->totalCoreAuthCount) {
            $res['TotalCoreAuthCount'] = $this->totalCoreAuthCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalEcsAuthCount) {
            $res['TotalEcsAuthCount'] = $this->totalEcsAuthCount;
        }
        if (null !== $this->unUsedCount) {
            $res['UnUsedCount'] = $this->unUsedCount;
        }
        if (null !== $this->unusedCoreAuthCount) {
            $res['UnusedCoreAuthCount'] = $this->unusedCoreAuthCount;
        }
        if (null !== $this->unusedEcsAuthCount) {
            $res['UnusedEcsAuthCount'] = $this->unusedEcsAuthCount;
        }
        if (null !== $this->usedCoreCount) {
            $res['UsedCoreCount'] = $this->usedCoreCount;
        }
        if (null !== $this->usedEcsCount) {
            $res['UsedEcsCount'] = $this->usedEcsCount;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthBindType'])) {
            $model->authBindType = $map['AuthBindType'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['TotalCoreAuthCount'])) {
            $model->totalCoreAuthCount = $map['TotalCoreAuthCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalEcsAuthCount'])) {
            $model->totalEcsAuthCount = $map['TotalEcsAuthCount'];
        }
        if (isset($map['UnUsedCount'])) {
            $model->unUsedCount = $map['UnUsedCount'];
        }
        if (isset($map['UnusedCoreAuthCount'])) {
            $model->unusedCoreAuthCount = $map['UnusedCoreAuthCount'];
        }
        if (isset($map['UnusedEcsAuthCount'])) {
            $model->unusedEcsAuthCount = $map['UnusedEcsAuthCount'];
        }
        if (isset($map['UsedCoreCount'])) {
            $model->usedCoreCount = $map['UsedCoreCount'];
        }
        if (isset($map['UsedEcsCount'])) {
            $model->usedEcsCount = $map['UsedEcsCount'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
