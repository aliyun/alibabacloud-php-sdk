<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDriverConfigsResponseBody\driverConfigList;

use AlibabaCloud\Tea\Model;

class configList extends Model
{
    /**
     * @description The ID of the configuration.
     *
     * @example dac71722ceac4a299dbf3e8dc3c8****
     *
     * @var string
     */
    public $configId;

    /**
     * @description The configuration content or the Object Storage Service (OSS) path of the configuration file.
     *
     * @example {\"test\":123}
     *
     * @var string
     */
    public $content;

    /**
     * @description The format of the configuration. Valid values: KV (key-value pair), JSON (JSON string), and FILE (configuration file).
     *
     * @example JSON
     *
     * @var string
     */
    public $format;

    /**
     * @description The key of the configuration. If multiple configurations are available, keywords can be used to identify the configurations.
     *
     * @example key1
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'configId' => 'ConfigId',
        'content'  => 'Content',
        'format'   => 'Format',
        'key'      => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
