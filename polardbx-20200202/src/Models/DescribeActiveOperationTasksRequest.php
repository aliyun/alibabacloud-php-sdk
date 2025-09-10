<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class DescribeActiveOperationTasksRequest extends Model
{
    /**
     * @var int
     */
    public $allowCancel;

    /**
     * @var int
     */
    public $allowChange;

    /**
     * @var string
     */
    public $changeLevel;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $insName;

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
    public $productId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'allowCancel' => 'AllowCancel',
        'allowChange' => 'AllowChange',
        'changeLevel' => 'ChangeLevel',
        'dbType' => 'DbType',
        'insName' => 'InsName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'productId' => 'ProductId',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowCancel) {
            $res['AllowCancel'] = $this->allowCancel;
        }

        if (null !== $this->allowChange) {
            $res['AllowChange'] = $this->allowChange;
        }

        if (null !== $this->changeLevel) {
            $res['ChangeLevel'] = $this->changeLevel;
        }

        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }

        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['AllowCancel'])) {
            $model->allowCancel = $map['AllowCancel'];
        }

        if (isset($map['AllowChange'])) {
            $model->allowChange = $map['AllowChange'];
        }

        if (isset($map['ChangeLevel'])) {
            $model->changeLevel = $map['ChangeLevel'];
        }

        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }

        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
