<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancePortraitResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $itemKey;
    protected $_name = [
        'content' => 'Content',
        'itemKey' => 'ItemKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->itemKey) {
            $res['ItemKey'] = $this->itemKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ItemKey'])) {
            $model->itemKey = $map['ItemKey'];
        }

        return $model;
    }
}
