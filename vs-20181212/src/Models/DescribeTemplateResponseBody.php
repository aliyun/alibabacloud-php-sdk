<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplateResponseBody\transConfigs;
use AlibabaCloud\Tea\Model;

class DescribeTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $hlsTs;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $mp4;

    /**
     * @var string
     */
    public $jpgOnDemand;

    /**
     * @var string
     */
    public $flv;

    /**
     * @var string
     */
    public $ossFilePrefix;

    /**
     * @var string
     */
    public $trigger;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var transConfigs[]
     */
    public $transConfigs;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $jpgSequence;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $jpgOverwrite;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $hlsM3u8;

    /**
     * @var int
     */
    public $interval;
    protected $_name = [
        'description'   => 'Description',
        'createdTime'   => 'CreatedTime',
        'endTime'       => 'EndTime',
        'hlsTs'         => 'HlsTs',
        'ossBucket'     => 'OssBucket',
        'retention'     => 'Retention',
        'fileFormat'    => 'FileFormat',
        'name'          => 'Name',
        'mp4'           => 'Mp4',
        'jpgOnDemand'   => 'JpgOnDemand',
        'flv'           => 'Flv',
        'ossFilePrefix' => 'OssFilePrefix',
        'trigger'       => 'Trigger',
        'ossEndpoint'   => 'OssEndpoint',
        'requestId'     => 'RequestId',
        'transConfigs'  => 'TransConfigs',
        'startTime'     => 'StartTime',
        'type'          => 'Type',
        'jpgSequence'   => 'JpgSequence',
        'callback'      => 'Callback',
        'jpgOverwrite'  => 'JpgOverwrite',
        'region'        => 'Region',
        'id'            => 'Id',
        'hlsM3u8'       => 'HlsM3u8',
        'interval'      => 'Interval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->hlsTs) {
            $res['HlsTs'] = $this->hlsTs;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->mp4) {
            $res['Mp4'] = $this->mp4;
        }
        if (null !== $this->jpgOnDemand) {
            $res['JpgOnDemand'] = $this->jpgOnDemand;
        }
        if (null !== $this->flv) {
            $res['Flv'] = $this->flv;
        }
        if (null !== $this->ossFilePrefix) {
            $res['OssFilePrefix'] = $this->ossFilePrefix;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transConfigs) {
            $res['TransConfigs'] = [];
            if (null !== $this->transConfigs && \is_array($this->transConfigs)) {
                $n = 0;
                foreach ($this->transConfigs as $item) {
                    $res['TransConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->jpgSequence) {
            $res['JpgSequence'] = $this->jpgSequence;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->jpgOverwrite) {
            $res['JpgOverwrite'] = $this->jpgOverwrite;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->hlsM3u8) {
            $res['HlsM3u8'] = $this->hlsM3u8;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HlsTs'])) {
            $model->hlsTs = $map['HlsTs'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Mp4'])) {
            $model->mp4 = $map['Mp4'];
        }
        if (isset($map['JpgOnDemand'])) {
            $model->jpgOnDemand = $map['JpgOnDemand'];
        }
        if (isset($map['Flv'])) {
            $model->flv = $map['Flv'];
        }
        if (isset($map['OssFilePrefix'])) {
            $model->ossFilePrefix = $map['OssFilePrefix'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransConfigs'])) {
            if (!empty($map['TransConfigs'])) {
                $model->transConfigs = [];
                $n                   = 0;
                foreach ($map['TransConfigs'] as $item) {
                    $model->transConfigs[$n++] = null !== $item ? transConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['JpgSequence'])) {
            $model->jpgSequence = $map['JpgSequence'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['JpgOverwrite'])) {
            $model->jpgOverwrite = $map['JpgOverwrite'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['HlsM3u8'])) {
            $model->hlsM3u8 = $map['HlsM3u8'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
