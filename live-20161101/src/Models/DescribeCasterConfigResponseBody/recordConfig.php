<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig\recordFormat;
use AlibabaCloud\Tea\Model;

class recordConfig extends Model
{
    /**
     * @description On-demand recording. Values:
     * - 0: Off.
     * - 1: Via HTTP callback.
     * - 2: Parse streaming parameters for on-demand recording.
     * - 7: Default to not record.
     *
     * @example 0
     *
     * @var int
     */
    public $onDemand;

    /**
     * @description The OSS bucket for storage.
     *
     * @example liveBucket****
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The Object Storage Service (OSS) endpoint.
     *
     * @example oss-cn-shanghai.aliyundoc.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @description The recording configuration.
     *
     * @var recordFormat
     */
    public $recordFormat;
    protected $_name = [
        'onDemand' => 'OnDemand',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'recordFormat' => 'RecordFormat',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->onDemand) {
            $res['OnDemand'] = $this->onDemand;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->recordFormat) {
            $res['RecordFormat'] = null !== $this->recordFormat ? $this->recordFormat->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnDemand'])) {
            $model->onDemand = $map['OnDemand'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['RecordFormat'])) {
            $model->recordFormat = recordFormat::fromMap($map['RecordFormat']);
        }

        return $model;
    }
}
