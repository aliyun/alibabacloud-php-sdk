<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example 2021-11-23T18:33:48
     *
     * @var string
     */
    public $endTime;

    /**
     * @example hls
     *
     * @var string
     */
    public $fileFormat;

    /**
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @example 2be2a673-6033-4874-b6f2-f2bc0a1*****
     *
     * @var string
     */
    public $id;

    /**
     * @example my_oss_bucket
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @example oss-cn-qingdao.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @example record/live/310*****007/2021-11-23-18-19-38_2021-11-23-18-33-48.m3u8
     *
     * @var string
     */
    public $ossObject;

    /**
     * @example 2021-11-23T18:19:32
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 323*****997-cn-qingdao
     *
     * @var string
     */
    public $streamId;

    /**
     * @example 388*****204-cn-qingdao
     *
     * @var string
     */
    public $templateId;

    /**
     * @example record
     *
     * @var string
     */
    public $type;

    /**
     * @example http://my_oss_bucket.oss-cn-qingdao.aliyuncs.com/record/live/310*****007/2021-11-23-18-19-38_2021-11-23-18-33-48.m3u8
     *
     * @var string
     */
    public $url;

    /**
     * @example 1920
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'endTime'     => 'EndTime',
        'fileFormat'  => 'FileFormat',
        'height'      => 'Height',
        'id'          => 'Id',
        'ossBucket'   => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossObject'   => 'OssObject',
        'startTime'   => 'StartTime',
        'streamId'    => 'StreamId',
        'templateId'  => 'TemplateId',
        'type'        => 'Type',
        'url'         => 'Url',
        'width'       => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
