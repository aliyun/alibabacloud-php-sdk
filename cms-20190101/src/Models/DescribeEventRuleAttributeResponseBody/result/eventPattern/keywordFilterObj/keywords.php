<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleAttributeResponseBody\result\eventPattern\keywordFilterObj;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->keyword)) {
            Model::validateArray($this->keyword);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            if (\is_array($this->keyword)) {
                $res['keyword'] = [];
                $n1 = 0;
                foreach ($this->keyword as $item1) {
                    $res['keyword'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['keyword'])) {
            if (!empty($map['keyword'])) {
                $model->keyword = [];
                $n1 = 0;
                foreach ($map['keyword'] as $item1) {
                    $model->keyword[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
