<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class FEClusterList extends Model
{
    /**
     * @var string
     */
    public $dbClusterId;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $singleNodeCpuCores;

    /**
     * @var int
     */
    public $singleNodeMemoryInGB;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'dbClusterId' => 'DbClusterId',
        'nodeCount' => 'NodeCount',
        'singleNodeCpuCores' => 'SingleNodeCpuCores',
        'singleNodeMemoryInGB' => 'SingleNodeMemoryInGB',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbClusterId) {
            $res['DbClusterId'] = $this->dbClusterId;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->singleNodeCpuCores) {
            $res['SingleNodeCpuCores'] = $this->singleNodeCpuCores;
        }

        if (null !== $this->singleNodeMemoryInGB) {
            $res['SingleNodeMemoryInGB'] = $this->singleNodeMemoryInGB;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['SingleNodeCpuCores'])) {
            $model->singleNodeCpuCores = $map['SingleNodeCpuCores'];
        }

        if (isset($map['SingleNodeMemoryInGB'])) {
            $model->singleNodeMemoryInGB = $map['SingleNodeMemoryInGB'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
