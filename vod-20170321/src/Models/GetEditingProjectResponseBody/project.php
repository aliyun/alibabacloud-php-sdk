<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $timeline;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'storageLocation' => 'StorageLocation',
        'status'          => 'Status',
        'creationTime'    => 'CreationTime',
        'modifiedTime'    => 'ModifiedTime',
        'description'     => 'Description',
        'coverURL'        => 'CoverURL',
        'projectId'       => 'ProjectId',
        'timeline'        => 'Timeline',
        'title'           => 'Title',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
