<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class TableCompactionHistory extends Model
{
    /**
     * @var int
     */
    public $afterFilesCount;

    /**
     * @var int
     */
    public $afterFilesSize;

    /**
     * @var int
     */
    public $beforeFilesCount;

    /**
     * @var int
     */
    public $beforeFilesLastCreationTime;

    /**
     * @var int
     */
    public $beforeFilesSize;

    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var int
     */
    public $commitTime;

    /**
     * @var int
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $updatedBy;
    protected $_name = [
        'afterFilesCount' => 'afterFilesCount',
        'afterFilesSize' => 'afterFilesSize',
        'beforeFilesCount' => 'beforeFilesCount',
        'beforeFilesLastCreationTime' => 'beforeFilesLastCreationTime',
        'beforeFilesSize' => 'beforeFilesSize',
        'catalogId' => 'catalogId',
        'commitTime' => 'commitTime',
        'snapshotId' => 'snapshotId',
        'tableId' => 'tableId',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->afterFilesCount) {
            $res['afterFilesCount'] = $this->afterFilesCount;
        }

        if (null !== $this->afterFilesSize) {
            $res['afterFilesSize'] = $this->afterFilesSize;
        }

        if (null !== $this->beforeFilesCount) {
            $res['beforeFilesCount'] = $this->beforeFilesCount;
        }

        if (null !== $this->beforeFilesLastCreationTime) {
            $res['beforeFilesLastCreationTime'] = $this->beforeFilesLastCreationTime;
        }

        if (null !== $this->beforeFilesSize) {
            $res['beforeFilesSize'] = $this->beforeFilesSize;
        }

        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }

        if (null !== $this->commitTime) {
            $res['commitTime'] = $this->commitTime;
        }

        if (null !== $this->snapshotId) {
            $res['snapshotId'] = $this->snapshotId;
        }

        if (null !== $this->tableId) {
            $res['tableId'] = $this->tableId;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
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
        if (isset($map['afterFilesCount'])) {
            $model->afterFilesCount = $map['afterFilesCount'];
        }

        if (isset($map['afterFilesSize'])) {
            $model->afterFilesSize = $map['afterFilesSize'];
        }

        if (isset($map['beforeFilesCount'])) {
            $model->beforeFilesCount = $map['beforeFilesCount'];
        }

        if (isset($map['beforeFilesLastCreationTime'])) {
            $model->beforeFilesLastCreationTime = $map['beforeFilesLastCreationTime'];
        }

        if (isset($map['beforeFilesSize'])) {
            $model->beforeFilesSize = $map['beforeFilesSize'];
        }

        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }

        if (isset($map['commitTime'])) {
            $model->commitTime = $map['commitTime'];
        }

        if (isset($map['snapshotId'])) {
            $model->snapshotId = $map['snapshotId'];
        }

        if (isset($map['tableId'])) {
            $model->tableId = $map['tableId'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        return $model;
    }
}
