<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesEcsInfoListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 11.193.52.91
     *
     * @var string
     */
    public $ip;

    /**
     * @example sysom
     *
     * @var string
     */
    public $tagKey;

    /**
     * @example diagnosis
     *
     * @var string
     */
    public $tagValue;

    /**
     * @example public
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ip' => 'ip',
        'tagKey' => 'tag_key',
        'tagValue' => 'tag_value',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
