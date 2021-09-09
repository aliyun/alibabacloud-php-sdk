<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListIndexTemplatesResponseBody\result;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $settings;

    /**
     * @var string
     */
    public $mappings;

    /**
     * @var string
     */
    public $aliases;
    protected $_name = [
        'settings' => 'settings',
        'mappings' => 'mappings',
        'aliases'  => 'aliases',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->mappings) {
            $res['mappings'] = $this->mappings;
        }
        if (null !== $this->aliases) {
            $res['aliases'] = $this->aliases;
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
        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }
        if (isset($map['mappings'])) {
            $model->mappings = $map['mappings'];
        }
        if (isset($map['aliases'])) {
            $model->aliases = $map['aliases'];
        }

        return $model;
    }
}
