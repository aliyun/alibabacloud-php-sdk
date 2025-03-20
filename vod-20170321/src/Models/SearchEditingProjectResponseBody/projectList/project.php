<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchEditingProjectResponseBody\projectList;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description The thumbnail URL of the online editing project.
     *
     * @example cover_url
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the online editing project was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the online editing project.
     *
     * @example test project 001
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the online editing project, which must be consistent with the duration of the timeline.
     * > The Timeline parameter is not included in response parameters.
     *
     * @example 22.65
     *
     * @var float
     */
    public $duration;

    /**
     * @description The last time when the online editing project was modified. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-01-11T13:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the online editing project.
     *
     * @example 25cfc178d2de4*****e77aebed6afcd
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The region where the online editing project was created.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the online editing project. Separate multiple states with commas (,). By default, all online editing projects were queried. Valid values:
     *   **Normal**: indicates that the online editing project is in draft.
     *   **Producing**: indicates that the video is being produced.
     *   **Produced**: indicates that the video was produced.
     *   **ProduceFailed**: indicates that the video failed to be produced.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The path of the Object Storage Service (OSS) bucket where the produced video is stored.
     * > To view the path of the OSS bucket, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/?spm=a2c4g.11186623.2.15.6948257eaZ4m54#/vod/settings/censored), and choose **Configuration Management** > **Media Management** > **Storage**. On the Storage page, you can view the path of the OSS bucket.
     *
     * @example location_s
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The title of the online editing project.
     *
     * @example video_150873681****
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'coverURL' => 'CoverURL',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'duration' => 'Duration',
        'modifiedTime' => 'ModifiedTime',
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'storageLocation' => 'StorageLocation',
        'title' => 'Title',
    ];

    public function validate() {}

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
