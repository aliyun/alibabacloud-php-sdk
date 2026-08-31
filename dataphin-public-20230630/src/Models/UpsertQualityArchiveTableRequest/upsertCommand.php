<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityArchiveTableRequest;

use AlibabaCloud\Dara\Model;

class upsertCommand extends Model
{
    /**
     * @var string
     */
    public $addMode;

    /**
     * @var int
     */
    public $archiveTableId;

    /**
     * @var string
     */
    public $existTableName;

    /**
     * @var int
     */
    public $lifecycle;

    /**
     * @var int
     */
    public $maxArchiveCount;

    /**
     * @var string
     */
    public $newTableNamePrefix;

    /**
     * @var bool
     */
    public $setActive;

    /**
     * @var int
     */
    public $watchId;
    protected $_name = [
        'addMode' => 'AddMode',
        'archiveTableId' => 'ArchiveTableId',
        'existTableName' => 'ExistTableName',
        'lifecycle' => 'Lifecycle',
        'maxArchiveCount' => 'MaxArchiveCount',
        'newTableNamePrefix' => 'NewTableNamePrefix',
        'setActive' => 'SetActive',
        'watchId' => 'WatchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addMode) {
            $res['AddMode'] = $this->addMode;
        }

        if (null !== $this->archiveTableId) {
            $res['ArchiveTableId'] = $this->archiveTableId;
        }

        if (null !== $this->existTableName) {
            $res['ExistTableName'] = $this->existTableName;
        }

        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }

        if (null !== $this->maxArchiveCount) {
            $res['MaxArchiveCount'] = $this->maxArchiveCount;
        }

        if (null !== $this->newTableNamePrefix) {
            $res['NewTableNamePrefix'] = $this->newTableNamePrefix;
        }

        if (null !== $this->setActive) {
            $res['SetActive'] = $this->setActive;
        }

        if (null !== $this->watchId) {
            $res['WatchId'] = $this->watchId;
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
        if (isset($map['AddMode'])) {
            $model->addMode = $map['AddMode'];
        }

        if (isset($map['ArchiveTableId'])) {
            $model->archiveTableId = $map['ArchiveTableId'];
        }

        if (isset($map['ExistTableName'])) {
            $model->existTableName = $map['ExistTableName'];
        }

        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }

        if (isset($map['MaxArchiveCount'])) {
            $model->maxArchiveCount = $map['MaxArchiveCount'];
        }

        if (isset($map['NewTableNamePrefix'])) {
            $model->newTableNamePrefix = $map['NewTableNamePrefix'];
        }

        if (isset($map['SetActive'])) {
            $model->setActive = $map['SetActive'];
        }

        if (isset($map['WatchId'])) {
            $model->watchId = $map['WatchId'];
        }

        return $model;
    }
}
