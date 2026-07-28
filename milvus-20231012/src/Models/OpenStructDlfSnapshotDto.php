<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class OpenStructDlfSnapshotDto extends Model
{
    /**
     * @var int
     */
    public $changelogRecordCount;

    /**
     * @var string
     */
    public $commitKind;

    /**
     * @var int
     */
    public $deltaRecordCount;

    /**
     * @var int
     */
    public $schemaId;

    /**
     * @var int
     */
    public $snapshotId;

    /**
     * @var int
     */
    public $timeMillis;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'changelogRecordCount' => 'changelogRecordCount',
        'commitKind' => 'commitKind',
        'deltaRecordCount' => 'deltaRecordCount',
        'schemaId' => 'schemaId',
        'snapshotId' => 'snapshotId',
        'timeMillis' => 'timeMillis',
        'totalRecordCount' => 'totalRecordCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changelogRecordCount) {
            $res['changelogRecordCount'] = $this->changelogRecordCount;
        }

        if (null !== $this->commitKind) {
            $res['commitKind'] = $this->commitKind;
        }

        if (null !== $this->deltaRecordCount) {
            $res['deltaRecordCount'] = $this->deltaRecordCount;
        }

        if (null !== $this->schemaId) {
            $res['schemaId'] = $this->schemaId;
        }

        if (null !== $this->snapshotId) {
            $res['snapshotId'] = $this->snapshotId;
        }

        if (null !== $this->timeMillis) {
            $res['timeMillis'] = $this->timeMillis;
        }

        if (null !== $this->totalRecordCount) {
            $res['totalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['changelogRecordCount'])) {
            $model->changelogRecordCount = $map['changelogRecordCount'];
        }

        if (isset($map['commitKind'])) {
            $model->commitKind = $map['commitKind'];
        }

        if (isset($map['deltaRecordCount'])) {
            $model->deltaRecordCount = $map['deltaRecordCount'];
        }

        if (isset($map['schemaId'])) {
            $model->schemaId = $map['schemaId'];
        }

        if (isset($map['snapshotId'])) {
            $model->snapshotId = $map['snapshotId'];
        }

        if (isset($map['timeMillis'])) {
            $model->timeMillis = $map['timeMillis'];
        }

        if (isset($map['totalRecordCount'])) {
            $model->totalRecordCount = $map['totalRecordCount'];
        }

        return $model;
    }
}
