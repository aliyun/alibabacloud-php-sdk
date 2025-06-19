<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplateResponseBody\transConfigs;

class DescribeTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var string
     */
    public $flv;

    /**
     * @var string
     */
    public $hlsM3u8;

    /**
     * @var string
     */
    public $hlsTs;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $jpgOnDemand;

    /**
     * @var string
     */
    public $jpgOverwrite;

    /**
     * @var string
     */
    public $jpgSequence;

    /**
     * @var string
     */
    public $mp4;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossFilePrefix;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var transConfigs[]
     */
    public $transConfigs;

    /**
     * @var string
     */
    public $trigger;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'callback' => 'Callback',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'fileFormat' => 'FileFormat',
        'flv' => 'Flv',
        'hlsM3u8' => 'HlsM3u8',
        'hlsTs' => 'HlsTs',
        'id' => 'Id',
        'interval' => 'Interval',
        'jpgOnDemand' => 'JpgOnDemand',
        'jpgOverwrite' => 'JpgOverwrite',
        'jpgSequence' => 'JpgSequence',
        'mp4' => 'Mp4',
        'name' => 'Name',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossFilePrefix' => 'OssFilePrefix',
        'region' => 'Region',
        'requestId' => 'RequestId',
        'retention' => 'Retention',
        'transConfigs' => 'TransConfigs',
        'trigger' => 'Trigger',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->transConfigs)) {
            Model::validateArray($this->transConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->transConfigs) {
            if (\is_array($this->transConfigs)) {
                $res['TransConfigs'] = [];
                $n1 = 0;
                foreach ($this->transConfigs as $item1) {
                    $res['TransConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['TransConfigs'])) {
            if (!empty($map['TransConfigs'])) {
                $model->transConfigs = [];
                $n1 = 0;
                foreach ($map['TransConfigs'] as $item1) {
                    $model->transConfigs[$n1] = transConfigs::fromMap($item1);
                    ++$n1;
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
