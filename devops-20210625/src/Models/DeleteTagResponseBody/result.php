<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\DeleteTagResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example v1.0
     *
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagName' => 'tagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        return $model;
    }
}
