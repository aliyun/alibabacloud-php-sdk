<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template\settings;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListComponentIndicesResponseBody\result\content\template\settings\index\lifecycle;

class index extends Model
{
    /**
     * @var string
     */
    public $codec;

    /**
     * @var lifecycle
     */
    public $lifecycle;
    protected $_name = [
        'codec' => 'codec',
        'lifecycle' => 'lifecycle',
    ];

    public function validate()
    {
        if (null !== $this->lifecycle) {
            $this->lifecycle->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codec) {
            $res['codec'] = $this->codec;
        }

        if (null !== $this->lifecycle) {
            $res['lifecycle'] = null !== $this->lifecycle ? $this->lifecycle->toArray($noStream) : $this->lifecycle;
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
        if (isset($map['codec'])) {
            $model->codec = $map['codec'];
        }

        if (isset($map['lifecycle'])) {
            $model->lifecycle = lifecycle::fromMap($map['lifecycle']);
        }

        return $model;
    }
}
