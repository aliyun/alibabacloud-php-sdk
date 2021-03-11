<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplatesResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplatesResponseBody\templates\transConfigs;
use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $trigger;

    /**
     * @var string
     */
    public $hlsTs;

    /**
     * @var string
     */
    public $mp4;

    /**
     * @var string
     */
    public $jpgOverwrite;

    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var string
     */
    public $hlsM3u8;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $flv;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossFilePrefix;

    /**
     * @var transConfigs[]
     */
    public $transConfigs;

    /**
     * @var string
     */
    public $jpgOnDemand;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $jpgSequence;

    /**
     * @var string
     */
    public $fileFormat;

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
    public $interval;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'type'          => 'Type',
        'trigger'       => 'Trigger',
        'hlsTs'         => 'HlsTs',
        'mp4'           => 'Mp4',
        'jpgOverwrite'  => 'JpgOverwrite',
        'callback'      => 'Callback',
        'description'   => 'Description',
        'region'        => 'Region',
        'retention'     => 'Retention',
        'hlsM3u8'       => 'HlsM3u8',
        'name'          => 'Name',
        'flv'           => 'Flv',
        'createdTime'   => 'CreatedTime',
        'ossEndpoint'   => 'OssEndpoint',
        'ossFilePrefix' => 'OssFilePrefix',
        'transConfigs'  => 'TransConfigs',
        'jpgOnDemand'   => 'JpgOnDemand',
        'ossBucket'     => 'OssBucket',
        'jpgSequence'   => 'JpgSequence',
        'fileFormat'    => 'FileFormat',
        'endTime'       => 'EndTime',
        'startTime'     => 'StartTime',
        'interval'      => 'Interval',
        'id'            => 'Id',
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
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }
        if (null !== $this->hlsTs) {
            $res['HlsTs'] = $this->hlsTs;
        }
        if (null !== $this->mp4) {
            $res['Mp4'] = $this->mp4;
        }
        if (null !== $this->jpgOverwrite) {
            $res['JpgOverwrite'] = $this->jpgOverwrite;
        }
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->hlsM3u8) {
            $res['HlsM3u8'] = $this->hlsM3u8;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->flv) {
            $res['Flv'] = $this->flv;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossFilePrefix) {
            $res['OssFilePrefix'] = $this->ossFilePrefix;
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
        if (null !== $this->jpgOnDemand) {
            $res['JpgOnDemand'] = $this->jpgOnDemand;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->jpgSequence) {
            $res['JpgSequence'] = $this->jpgSequence;
        }
        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }
        if (isset($map['HlsTs'])) {
            $model->hlsTs = $map['HlsTs'];
        }
        if (isset($map['Mp4'])) {
            $model->mp4 = $map['Mp4'];
        }
        if (isset($map['JpgOverwrite'])) {
            $model->jpgOverwrite = $map['JpgOverwrite'];
        }
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['HlsM3u8'])) {
            $model->hlsM3u8 = $map['HlsM3u8'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Flv'])) {
            $model->flv = $map['Flv'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssFilePrefix'])) {
            $model->ossFilePrefix = $map['OssFilePrefix'];
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
        if (isset($map['JpgOnDemand'])) {
            $model->jpgOnDemand = $map['JpgOnDemand'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['JpgSequence'])) {
            $model->jpgSequence = $map['JpgSequence'];
        }
        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
