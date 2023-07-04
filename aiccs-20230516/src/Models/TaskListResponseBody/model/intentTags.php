<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskListResponseBody\model;

use AlibabaCloud\Tea\Model;

class intentTags extends Model
{
    /**
     * @description 意向标签描述
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $intentDescription;

    /**
     * @description 意向标签ID
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $intentTag;
    protected $_name = [
        'intentDescription' => 'IntentDescription',
        'intentTag'         => 'IntentTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentDescription) {
            $res['IntentDescription'] = $this->intentDescription;
        }
        if (null !== $this->intentTag) {
            $res['IntentTag'] = $this->intentTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intentTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentDescription'])) {
            $model->intentDescription = $map['IntentDescription'];
        }
        if (isset($map['IntentTag'])) {
            $model->intentTag = $map['IntentTag'];
        }

        return $model;
    }
}
