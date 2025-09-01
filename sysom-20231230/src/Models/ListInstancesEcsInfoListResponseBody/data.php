<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesEcsInfoListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ip' => 'ip',
        'tagKey' => 'tag_key',
        'tagValue' => 'tag_value',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        if (null !== $this->tagKey) {
            $res['tag_key'] = $this->tagKey;
        }

        if (null !== $this->tagValue) {
            $res['tag_value'] = $this->tagValue;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        if (isset($map['tag_key'])) {
            $model->tagKey = $map['tag_key'];
        }

        if (isset($map['tag_value'])) {
            $model->tagValue = $map['tag_value'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
