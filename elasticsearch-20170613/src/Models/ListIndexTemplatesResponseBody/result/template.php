<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListIndexTemplatesResponseBody\result;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @example {\\"index.number_of_shards\\":\\"1\\"}
     *
     * @var string
     */
    public $aliases;

    /**
     * @example {\\"properties\\":{\\"created_at\\":{\\"format\\":\\"EEE MMM dd HH:mm:ss Z yyyy\\",\\"type\\":\\"date\\"},\\"host_name\\":{\\"type\\":\\"keyword\\"}}}
     *
     * @var string
     */
    public $mappings;

    /**
     * @example {\\"mydata\\":{}}
     *
     * @var string
     */
    public $settings;
    protected $_name = [
        'aliases'  => 'aliases',
        'mappings' => 'mappings',
        'settings' => 'settings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliases) {
            $res['aliases'] = $this->aliases;
        }
        if (null !== $this->mappings) {
            $res['mappings'] = $this->mappings;
        }
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliases'])) {
            $model->aliases = $map['aliases'];
        }
        if (isset($map['mappings'])) {
            $model->mappings = $map['mappings'];
        }
        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }

        return $model;
    }
}
