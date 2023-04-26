<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody\projectList;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description The ID of the online editing project.
     *
     * @example cover_url
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The end of the time range to query. The query is performed based on the time range during which the required online editing projects were created. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The thumbnail URL of the online editing project.
     *
     * @example The ID of the request.
     *
     * @var string
     */
    public $description;

    /**
     * @example 22.65
     *
     * @var float
     */
    public $duration;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 2017-01-11T13:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description Queries online editing projects.
     *
     * @example 25cfc178d2de4*****e77aebed6afcd
     *
     * @var string
     */
    public $projectId;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The sorting rule of results. Valid values:
     *
     *   **CreationTime:Desc**: sorts the results based on the creation time in descending order. This is the default value.
     *   **CreationTime:Asc**: sorts the results based on the creation time in ascending order.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The path of the Object Storage Service (OSS) bucket where the produced video is stored.
     *
     * > To view the path of the OSS bucket, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/?spm=a2c4g.11186623.2.15.6948257eaZ4m54#/vod/settings/censored), and choose **Configuration Management** > **Media Management** > **Storage**. On the Storage page, you can view the path of the OSS bucket.
     * @example location_s
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'coverURL'        => 'CoverURL',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'duration'        => 'Duration',
        'modifiedTime'    => 'ModifiedTime',
        'projectId'       => 'ProjectId',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
        'storageLocation' => 'StorageLocation',
        'title'           => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
