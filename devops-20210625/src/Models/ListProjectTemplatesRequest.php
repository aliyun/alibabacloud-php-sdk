<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListProjectTemplatesRequest extends Model
{
    /**
     * @description 模板类型
     *
     * @var string
     */
    public $category;
    protected $_name = [
        'category' => 'category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        return $model;
    }
}
