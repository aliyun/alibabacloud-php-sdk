<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example https://****.com/6AB4D0E1E1C74468883516C2349****.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The title of the online editing project.
     *
     * @example 2017-10-23T13:33:40Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The time when the online editing project was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example testdescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The information about the online editing project.
     *
     * @example 2017-10-23T14:27:26Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description 58928
     *
     * @example fb2101bf24b27*****54cb318787dc
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
     * @description The path of the Object Storage Service (OSS) bucket where the online editing project is stored.
     *
     * > To view the path of the OSS bucket, log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com/?spm=a2c4g.11186623.2.15.6948257eaZ4m54#/vod/settings/censored), and choose **Configuration Management** > **Media Management** > **Storage**. On the Storage page, you can view the path of the OSS bucket.
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the online editing project.
     *
     * @example location_s
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description 朴灵
     *
     * @example {\"TimelineIn\":0,\"TimelineOut\":9.42}
     *
     * @var string
     */
    public $timeline;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'coverURL'        => 'CoverURL',
        'creationTime'    => 'CreationTime',
        'description'     => 'Description',
        'modifiedTime'    => 'ModifiedTime',
        'projectId'       => 'ProjectId',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
        'storageLocation' => 'StorageLocation',
        'timeline'        => 'Timeline',
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
