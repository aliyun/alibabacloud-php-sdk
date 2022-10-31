<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig\recordFormat;
use AlibabaCloud\Tea\Model;

class recordConfig extends Model
{
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
        'ossBucket'    => 'OssBucket',
        'ossEndpoint'  => 'OssEndpoint',
        'recordFormat' => 'RecordFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
