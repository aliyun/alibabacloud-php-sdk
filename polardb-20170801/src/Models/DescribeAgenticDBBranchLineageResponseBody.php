<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBBranchLineageResponseBody\items;

class DescribeAgenticDBBranchLineageResponseBody extends Model
{
    /**
     * @var string
     */
    public $anchorBranchId;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $rootBranchId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'anchorBranchId' => 'AnchorBranchId',
        'items' => 'Items',
        'nodeCount' => 'NodeCount',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
        'rootBranchId' => 'RootBranchId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anchorBranchId) {
            $res['AnchorBranchId'] = $this->anchorBranchId;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rootBranchId) {
            $res['RootBranchId'] = $this->rootBranchId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AnchorBranchId'])) {
            $model->anchorBranchId = $map['AnchorBranchId'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RootBranchId'])) {
            $model->rootBranchId = $map['RootBranchId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
