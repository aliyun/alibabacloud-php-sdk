<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class costUnitStatisInfo extends Model
{
    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var int
     */
    public $resourceGroupCount;

    /**
     * @var int
     */
    public $subUnitCount;

    /**
     * @var int
     */
    public $totalResourceCount;

    /**
     * @var int
     */
    public $totalResourceGroupCount;

    /**
     * @var int
     */
    public $totalUserCount;

    /**
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
