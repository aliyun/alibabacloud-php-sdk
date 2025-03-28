<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class BuildConfig extends Model
{
    /**
     * @var DefaultBuilderConfig
     */
    public $default;
    protected $_name = [
        'default' => 'default',
    ];

    public function validate()
    {
        if (null !== $this->default) {
            $this->default->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->default) {
            $res['default'] = null !== $this->default ? $this->default->toArray($noStream) : $this->default;
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
        if (isset($map['default'])) {
            $model->default = DefaultBuilderConfig::fromMap($map['default']);
        }

        return $model;
    }
}
