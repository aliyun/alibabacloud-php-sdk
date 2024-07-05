<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplatesResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplatesResponseBody\templates\transConfigs;
use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @example http://example.com/callback
     *
     * @var string
     */
    public $callback;

    /**
     * @example 2018-12-10T10:00:00Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example hls
     *
     * @var string
     */
    public $fileFormat;

    /**
     * @example osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $flv;

    /**
     * @example osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $hlsM3u8;

    /**
     * @example osspath/record/{StreamName}/{UnixTimestamp}_{Sequence}
     *
     * @var string
     */
    public $hlsTs;

    /**
     * @example 323*****998-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example 3600
     *
     * @var int
     */
    public $interval;

    /**
     * @example osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}_ondemand.jpg
     *
     * @var string
     */
    public $jpgOnDemand;

    /**
     * @example osspath/snapshot/{AppName}/{StreamName}.jpg
     *
     * @var string
     */
    public $jpgOverwrite;

    /**
     * @example osspath/snapshot/{AppName}/{StreamName}/{UnixTimestamp}.jpg
     *
     * @var string
     */
    public $jpgSequence;

    /**
     * @example osspath/record/{StreamName}/{EscapedStartTime}_{EscapedEndTime}
     *
     * @var string
     */
    public $mp4;

    /**
     * @var string
     */
    public $name;

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
     * @example my_prefix
     *
     * @var string
     */
    public $ossFilePrefix;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $region;

    /**
     * @example 3
     *
     * @var int
     */
    public $retention;

    /**
     * @var transConfigs[]
     */
    public $transConfigs;

    /**
     * @example auto
     *
     * @var string
     */
    public $trigger;

    /**
     * @example record
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'callback'      => 'Callback',
        'createdTime'   => 'CreatedTime',
        'description'   => 'Description',
        'fileFormat'    => 'FileFormat',
        'flv'           => 'Flv',
        'hlsM3u8'       => 'HlsM3u8',
        'hlsTs'         => 'HlsTs',
        'id'            => 'Id',
        'interval'      => 'Interval',
        'jpgOnDemand'   => 'JpgOnDemand',
        'jpgOverwrite'  => 'JpgOverwrite',
        'jpgSequence'   => 'JpgSequence',
        'mp4'           => 'Mp4',
        'name'          => 'Name',
        'ossBucket'     => 'OssBucket',
        'ossEndpoint'   => 'OssEndpoint',
        'ossFilePrefix' => 'OssFilePrefix',
        'region'        => 'Region',
        'retention'     => 'Retention',
        'transConfigs'  => 'TransConfigs',
        'trigger'       => 'Trigger',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileFormat) {
            $res['FileFormat'] = $this->fileFormat;
        }
        if (null !== $this->flv) {
            $res['Flv'] = $this->flv;
        }
        if (null !== $this->hlsM3u8) {
            $res['HlsM3u8'] = $this->hlsM3u8;
        }
        if (null !== $this->hlsTs) {
            $res['HlsTs'] = $this->hlsTs;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->jpgOnDemand) {
            $res['JpgOnDemand'] = $this->jpgOnDemand;
        }
        if (null !== $this->jpgOverwrite) {
            $res['JpgOverwrite'] = $this->jpgOverwrite;
        }
        if (null !== $this->jpgSequence) {
            $res['JpgSequence'] = $this->jpgSequence;
        }
        if (null !== $this->mp4) {
            $res['Mp4'] = $this->mp4;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossFilePrefix) {
            $res['OssFilePrefix'] = $this->ossFilePrefix;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
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
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileFormat'])) {
            $model->fileFormat = $map['FileFormat'];
        }
        if (isset($map['Flv'])) {
            $model->flv = $map['Flv'];
        }
        if (isset($map['HlsM3u8'])) {
            $model->hlsM3u8 = $map['HlsM3u8'];
        }
        if (isset($map['HlsTs'])) {
            $model->hlsTs = $map['HlsTs'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['JpgOnDemand'])) {
            $model->jpgOnDemand = $map['JpgOnDemand'];
        }
        if (isset($map['JpgOverwrite'])) {
            $model->jpgOverwrite = $map['JpgOverwrite'];
        }
        if (isset($map['JpgSequence'])) {
            $model->jpgSequence = $map['JpgSequence'];
        }
        if (isset($map['Mp4'])) {
            $model->mp4 = $map['Mp4'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssFilePrefix'])) {
            $model->ossFilePrefix = $map['OssFilePrefix'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
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
        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
