<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\keywordFilterObj;

use AlibabaCloud\Tea\Model;

class keywords extends Model
{
    /**
     * @var string[]
     */
    public $keyword;
    protected $_name = [
        'keyword' => 'keyword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keywords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['keyword'])) {
            if (!empty($map['keyword'])) {
                $model->keyword = $map['keyword'];
            }
        }

        return $model;
    }
}
