<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\dagInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\dbBaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\instances;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\nextFireTimeResult;
use AlibabaCloud\Tea\Model;

class pluginExtraData extends Model
{
    /**
     * @var dagInfo
     */
    public $dagInfo;

    /**
     * @var dbBaseInfo
     */
    public $dbBaseInfo;

    /**
     * @example 2
     *
     * @var int
     */
    public $instanceTotal;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var nextFireTimeResult
     */
    public $nextFireTimeResult;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'dagInfo'            => 'DagInfo',
        'dbBaseInfo'         => 'DbBaseInfo',
        'instanceTotal'      => 'InstanceTotal',
        'instances'          => 'Instances',
        'nextFireTimeResult' => 'NextFireTimeResult',
        'pageIndex'          => 'PageIndex',
        'pageSize'           => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagInfo) {
            $res['DagInfo'] = null !== $this->dagInfo ? $this->dagInfo->toMap() : null;
        }
        if (null !== $this->dbBaseInfo) {
            $res['DbBaseInfo'] = null !== $this->dbBaseInfo ? $this->dbBaseInfo->toMap() : null;
        }
        if (null !== $this->instanceTotal) {
            $res['InstanceTotal'] = $this->instanceTotal;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextFireTimeResult) {
            $res['NextFireTimeResult'] = null !== $this->nextFireTimeResult ? $this->nextFireTimeResult->toMap() : null;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginExtraData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagInfo'])) {
            $model->dagInfo = dagInfo::fromMap($map['DagInfo']);
        }
        if (isset($map['DbBaseInfo'])) {
            $model->dbBaseInfo = dbBaseInfo::fromMap($map['DbBaseInfo']);
        }
        if (isset($map['InstanceTotal'])) {
            $model->instanceTotal = $map['InstanceTotal'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextFireTimeResult'])) {
            $model->nextFireTimeResult = nextFireTimeResult::fromMap($map['NextFireTimeResult']);
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
