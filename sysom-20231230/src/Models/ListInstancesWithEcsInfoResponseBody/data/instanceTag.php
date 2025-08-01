<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesWithEcsInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceTag extends Model
{
    /**
     * @example test_tag_key
     *
     * @var string
     */
    public $tagKey;

    /**
     * @example test_tag_value
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey' => 'tag_key',
        'tagValue' => 'tag_value',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return instanceTag
     */
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
