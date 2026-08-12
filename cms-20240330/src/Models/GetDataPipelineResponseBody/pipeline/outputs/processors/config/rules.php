<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetDataPipelineResponseBody\pipeline\outputs\processors\config;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var int
     */
    public $keepPrefix;

    /**
     * @var int
     */
    public $keepSuffix;

    /**
     * @var string[]
     */
    public $keys;

    /**
     * @var string
     */
    public $maskChar;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string[]
     */
    public $types;
    protected $_name = [
        'keepPrefix' => 'keepPrefix',
        'keepSuffix' => 'keepSuffix',
        'keys' => 'keys',
        'maskChar' => 'maskChar',
        'mode' => 'mode',
        'types' => 'types',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keepPrefix) {
            $res['keepPrefix'] = $this->keepPrefix;
        }

        if (null !== $this->keepSuffix) {
            $res['keepSuffix'] = $this->keepSuffix;
        }

        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['keys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maskChar) {
            $res['maskChar'] = $this->maskChar;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['types'] = [];
                $n1 = 0;
                foreach ($this->types as $item1) {
                    $res['types'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['keepPrefix'])) {
            $model->keepPrefix = $map['keepPrefix'];
        }

        if (isset($map['keepSuffix'])) {
            $model->keepSuffix = $map['keepSuffix'];
        }

        if (isset($map['keys'])) {
            if (!empty($map['keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['keys'] as $item1) {
                    $model->keys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['maskChar'])) {
            $model->maskChar = $map['maskChar'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['types'])) {
            if (!empty($map['types'])) {
                $model->types = [];
                $n1 = 0;
                foreach ($map['types'] as $item1) {
                    $model->types[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
