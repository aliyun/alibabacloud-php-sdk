<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Tea\Model;

class summarization extends Model
{
    /**
     * @example Paragraph
     *
     * @var string[]
     */
    public $types;
    protected $_name = [
        'types' => 'Types',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summarization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }

        return $model;
    }
}
