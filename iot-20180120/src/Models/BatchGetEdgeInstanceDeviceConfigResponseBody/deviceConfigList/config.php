<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetEdgeInstanceDeviceConfigResponseBody\deviceConfigList;

use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The configuration content or the Object Storage Service (OSS) path of the configuration file.
     *
     * @example {\"test\": \"device_config_demo\"}
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
    protected $_name = [
        'content' => 'Content',
        'format'  => 'Format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        return $model;
    }
}
