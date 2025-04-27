<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeComponentIndexResponseBody\result;

use AlibabaCloud\Dara\Model;

class template extends Model
{
    /**
     * @var mixed[]
     */
    public $aliases;

    /**
     * @var mixed[]
     */
    public $mappings;

    /**
     * @var mixed[]
     */
    public $settings;
    protected $_name = [
        'aliases' => 'aliases',
        'mappings' => 'mappings',
        'settings' => 'settings',
    ];

    public function validate()
    {
        if (\is_array($this->aliases)) {
            Model::validateArray($this->aliases);
        }
        if (\is_array($this->mappings)) {
            Model::validateArray($this->mappings);
        }
        if (\is_array($this->settings)) {
            Model::validateArray($this->settings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliases) {
            if (\is_array($this->aliases)) {
                $res['aliases'] = [];
                foreach ($this->aliases as $key1 => $value1) {
                    $res['aliases'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->mappings) {
            if (\is_array($this->mappings)) {
                $res['mappings'] = [];
                foreach ($this->mappings as $key1 => $value1) {
                    $res['mappings'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->settings) {
            if (\is_array($this->settings)) {
                $res['settings'] = [];
                foreach ($this->settings as $key1 => $value1) {
                    $res['settings'][$key1] = $value1;
                }
            }
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
            if (!empty($map['aliases'])) {
                $model->aliases = [];
                foreach ($map['aliases'] as $key1 => $value1) {
                    $model->aliases[$key1] = $value1;
                }
            }
        }

        if (isset($map['mappings'])) {
            if (!empty($map['mappings'])) {
                $model->mappings = [];
                foreach ($map['mappings'] as $key1 => $value1) {
                    $model->mappings[$key1] = $value1;
                }
            }
        }

        if (isset($map['settings'])) {
            if (!empty($map['settings'])) {
                $model->settings = [];
                foreach ($map['settings'] as $key1 => $value1) {
                    $model->settings[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
