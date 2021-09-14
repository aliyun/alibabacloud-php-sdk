<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class StopUpgradeTaskRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $batchStrategyList;
    protected $_name = [
        'regionId'          => 'RegionId',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'batchStrategyList' => 'BatchStrategyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->batchStrategyList) {
            $res['BatchStrategyList'] = $this->batchStrategyList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopUpgradeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['BatchStrategyList'])) {
            $model->batchStrategyList = $map['BatchStrategyList'];
        }

        return $model;
    }
}
