<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var string
     */
    public $streamId;

    /**
     * @var string
     */
    public $ossObject;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'type'        => 'Type',
        'height'      => 'Height',
        'url'         => 'Url',
        'ossBucket'   => 'OssBucket',
        'fileFormat'  => 'FileFormat',
        'streamId'    => 'StreamId',
        'ossObject'   => 'OssObject',
        'endTime'     => 'EndTime',
        'startTime'   => 'StartTime',
        'width'       => 'Width',
        'templateId'  => 'TemplateId',
        'id'          => 'Id',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }
        if (null !== $this->streamId) {
            $res['StreamId'] = $this->streamId;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }
        if (isset($map['StreamId'])) {
            $model->streamId = $map['StreamId'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
