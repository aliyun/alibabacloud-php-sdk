<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeAtiAgentRegisterInfoMarketResponseBody;

use AlibabaCloud\Dara\Model;

class categories extends Model
{
    /**
     * @var string[]
     */
    public $category;
    protected $_name = [
        'category' => 'category',
    ];

    public function validate()
    {
        if (\is_array($this->category)) {
            Model::validateArray($this->category);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            if (\is_array($this->category)) {
                $res['category'] = [];
                $n1 = 0;
                foreach ($this->category as $item1) {
                    $res['category'][$n1] = $item1;
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
        if (isset($map['category'])) {
            if (!empty($map['category'])) {
                $model->category = [];
                $n1 = 0;
                foreach ($map['category'] as $item1) {
                    $model->category[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
