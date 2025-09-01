<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListPluginsInstancesResponseBody\data;

use AlibabaCloud\Dara\Model;

class instanceTag extends Model
{
    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey' => 'tag_key',
        'tagValue' => 'tag_value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['tag_key'] = $this->tagKey;
        }

        if (null !== $this->tagValue) {
            $res['tag_value'] = $this->tagValue;
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
        if (isset($map['tag_key'])) {
            $model->tagKey = $map['tag_key'];
        }

        if (isset($map['tag_value'])) {
            $model->tagValue = $map['tag_value'];
        }

        return $model;
    }
}
