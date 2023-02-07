<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class costUnitStatisInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $resourceCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $resourceGroupCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $subUnitCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalResourceCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalResourceGroupCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalUserCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $userCount;
    protected $_name = [
        'resourceCount'           => 'ResourceCount',
        'resourceGroupCount'      => 'ResourceGroupCount',
        'subUnitCount'            => 'SubUnitCount',
        'totalResourceCount'      => 'TotalResourceCount',
        'totalResourceGroupCount' => 'TotalResourceGroupCount',
        'totalUserCount'          => 'TotalUserCount',
        'userCount'               => 'UserCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->resourceGroupCount) {
            $res['ResourceGroupCount'] = $this->resourceGroupCount;
        }
        if (null !== $this->subUnitCount) {
            $res['SubUnitCount'] = $this->subUnitCount;
        }
        if (null !== $this->totalResourceCount) {
            $res['TotalResourceCount'] = $this->totalResourceCount;
        }
        if (null !== $this->totalResourceGroupCount) {
            $res['TotalResourceGroupCount'] = $this->totalResourceGroupCount;
        }
        if (null !== $this->totalUserCount) {
            $res['TotalUserCount'] = $this->totalUserCount;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return costUnitStatisInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['ResourceGroupCount'])) {
            $model->resourceGroupCount = $map['ResourceGroupCount'];
        }
        if (isset($map['SubUnitCount'])) {
            $model->subUnitCount = $map['SubUnitCount'];
        }
        if (isset($map['TotalResourceCount'])) {
            $model->totalResourceCount = $map['TotalResourceCount'];
        }
        if (isset($map['TotalResourceGroupCount'])) {
            $model->totalResourceGroupCount = $map['TotalResourceGroupCount'];
        }
        if (isset($map['TotalUserCount'])) {
            $model->totalUserCount = $map['TotalUserCount'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }

        return $model;
    }
}
