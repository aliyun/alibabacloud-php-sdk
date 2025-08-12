<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\keywordFilterObj\keywords;

class keywordFilterObj extends Model
{
    /**
     * @var keywords
     */
    public $keywords;

    /**
     * @var string
     */
    public $relation;
    protected $_name = [
        'keywords' => 'Keywords',
        'relation' => 'Relation',
    ];

    public function validate()
    {
        if (null !== $this->keywords) {
            $this->keywords->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywords) {
            $res['Keywords'] = null !== $this->keywords ? $this->keywords->toArray($noStream) : $this->keywords;
        }

        if (null !== $this->relation) {
            $res['Relation'] = $this->relation;
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
        if (isset($map['Keywords'])) {
            $model->keywords = keywords::fromMap($map['Keywords']);
        }

        if (isset($map['Relation'])) {
            $model->relation = $map['Relation'];
        }

        return $model;
    }
}
