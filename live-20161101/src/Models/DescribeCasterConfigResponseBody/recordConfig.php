<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig\recordFormat;
use AlibabaCloud\Tea\Model;

class recordConfig extends Model
{
    /**
     * @var recordFormat
     */
    public $recordFormat;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'recordFormat' => 'RecordFormat',
        'ossBucket'    => 'OssBucket',
        'ossEndpoint'  => 'OssEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordFormat) {
            $res['RecordFormat'] = null !== $this->recordFormat ? $this->recordFormat->toMap() : null;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
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
        if (isset($map['RecordFormat'])) {
            $model->recordFormat = recordFormat::fromMap($map['RecordFormat']);
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
