<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\GetAgenticSpaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\GetAgenticSpaceResponseBody\agenticSpace\quota;

class agenticSpace extends Model
{
    /**
     * @var string
     */
    public $agenticSpaceId;

    /**
     * @var string
     */
    public $azone;

    /**
     * @var string
     */
    public $createTimeUtc;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $fileCountUsage;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemPath;

    /**
     * @var quota
     */
    public $quota;

    /**
     * @var int
     */
    public $spaceUsage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTimeUtc;
    protected $_name = [
        'agenticSpaceId' => 'AgenticSpaceId',
        'azone' => 'Azone',
        'createTimeUtc' => 'CreateTimeUtc',
        'description' => 'Description',
        'fileCountUsage' => 'FileCountUsage',
        'fileSystemId' => 'FileSystemId',
        'fileSystemPath' => 'FileSystemPath',
        'quota' => 'Quota',
        'spaceUsage' => 'SpaceUsage',
        'status' => 'Status',
        'updateTimeUtc' => 'UpdateTimeUtc',
    ];

    public function validate()
    {
        if (null !== $this->quota) {
            $this->quota->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agenticSpaceId) {
            $res['AgenticSpaceId'] = $this->agenticSpaceId;
        }

        if (null !== $this->azone) {
            $res['Azone'] = $this->azone;
        }

        if (null !== $this->createTimeUtc) {
            $res['CreateTimeUtc'] = $this->createTimeUtc;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileCountUsage) {
            $res['FileCountUsage'] = $this->fileCountUsage;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->fileSystemPath) {
            $res['FileSystemPath'] = $this->fileSystemPath;
        }

        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toArray($noStream) : $this->quota;
        }

        if (null !== $this->spaceUsage) {
            $res['SpaceUsage'] = $this->spaceUsage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTimeUtc) {
            $res['UpdateTimeUtc'] = $this->updateTimeUtc;
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
        if (isset($map['AgenticSpaceId'])) {
            $model->agenticSpaceId = $map['AgenticSpaceId'];
        }

        if (isset($map['Azone'])) {
            $model->azone = $map['Azone'];
        }

        if (isset($map['CreateTimeUtc'])) {
            $model->createTimeUtc = $map['CreateTimeUtc'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileCountUsage'])) {
            $model->fileCountUsage = $map['FileCountUsage'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['FileSystemPath'])) {
            $model->fileSystemPath = $map['FileSystemPath'];
        }

        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }

        if (isset($map['SpaceUsage'])) {
            $model->spaceUsage = $map['SpaceUsage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTimeUtc'])) {
            $model->updateTimeUtc = $map['UpdateTimeUtc'];
        }

        return $model;
    }
}
