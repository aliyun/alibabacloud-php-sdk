<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeIndexTemplateResponseBody\result;

use AlibabaCloud\Dara\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $aliases;

    /**
     * @var string
     */
    public $mappings;

    /**
     * @var string
     */
    public $settings;
    protected $_name = [
        'aliases' => 'aliases',
        'mappings' => 'mappings',
        'settings' => 'settings',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
