<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig\recordFormat;

class recordConfig extends Model
{
    /**
     * @var int
     */
    public $onDemand;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var recordFormat
     */
    public $recordFormat;
    protected $_name = [
        'onDemand' => 'OnDemand',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'recordFormat' => 'RecordFormat',
    ];

    public function validate()
    {
        if (null !== $this->recordFormat) {
            $this->recordFormat->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RecordFormat'] = null !== $this->recordFormat ? $this->recordFormat->toArray($noStream) : $this->recordFormat;
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
