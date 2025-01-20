<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\dagInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\dbBaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\instances;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData\nextFireTimeResult;

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
     * @var int
     */
    public $pageIndex;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var mixed[]
     */
    public $tempTableNameMap;
    protected $_name = [
        'dagInfo'            => 'DagInfo',
        'dbBaseInfo'         => 'DbBaseInfo',
        'instanceTotal'      => 'InstanceTotal',
        'instances'          => 'Instances',
        'nextFireTimeResult' => 'NextFireTimeResult',
        'pageIndex'          => 'PageIndex',
        'pageSize'           => 'PageSize',
        'tempTableNameMap'   => 'TempTableNameMap',
    ];

    public function validate()
    {
        if (null !== $this->dagInfo) {
            $this->dagInfo->validate();
        }
        if (null !== $this->dbBaseInfo) {
            $this->dbBaseInfo->validate();
        }
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (null !== $this->nextFireTimeResult) {
            $this->nextFireTimeResult->validate();
        }
        if (\is_array($this->tempTableNameMap)) {
            Model::validateArray($this->tempTableNameMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagInfo) {
            $res['DagInfo'] = null !== $this->dagInfo ? $this->dagInfo->toArray($noStream) : $this->dagInfo;
        }

        if (null !== $this->dbBaseInfo) {
            $res['DbBaseInfo'] = null !== $this->dbBaseInfo ? $this->dbBaseInfo->toArray($noStream) : $this->dbBaseInfo;
        }

        if (null !== $this->instanceTotal) {
            $res['InstanceTotal'] = $this->instanceTotal;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1               = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextFireTimeResult) {
            $res['NextFireTimeResult'] = null !== $this->nextFireTimeResult ? $this->nextFireTimeResult->toArray($noStream) : $this->nextFireTimeResult;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->tempTableNameMap) {
            if (\is_array($this->tempTableNameMap)) {
                $res['TempTableNameMap'] = [];
                foreach ($this->tempTableNameMap as $key1 => $value1) {
                    $res['TempTableNameMap'][$key1] = $value1;
                }
            }
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
                $n1               = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1++] = instances::fromMap($item1);
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

        if (isset($map['TempTableNameMap'])) {
            if (!empty($map['TempTableNameMap'])) {
                $model->tempTableNameMap = [];
                foreach ($map['TempTableNameMap'] as $key1 => $value1) {
                    $model->tempTableNameMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
