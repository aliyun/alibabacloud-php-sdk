<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectResponseBody;

use AlibabaCloud\Dara\Model;

class project extends Model
{
    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $timeline;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'coverURL' => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'modifiedTime' => 'ModifiedTime',
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'storageLocation' => 'StorageLocation',
        'timeline' => 'Timeline',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
