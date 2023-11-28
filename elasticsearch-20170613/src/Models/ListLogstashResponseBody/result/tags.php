<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashResponseBody\result;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description The disk size of the node.
     *
     * @example env
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The instance type of the ECS instance.
     *
     * @example dev
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey'   => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
