<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class DemoCategory extends Model
{
    /**
     * @var string
     */
    public $categoryCode;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var int
     */
    public $order;

    /**
     * @var DemoCategory[]
     */
    public $subCategories;
    protected $_name = [
        'categoryCode' => 'CategoryCode',
        'categoryName' => 'CategoryName',
        'order' => 'Order',
        'subCategories' => 'SubCategories',
    ];

    public function validate()
    {
        if (\is_array($this->subCategories)) {
            Model::validateArray($this->subCategories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['CategoryCode'] = $this->categoryCode;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->subCategories) {
            if (\is_array($this->subCategories)) {
                $res['SubCategories'] = [];
                $n1 = 0;
                foreach ($this->subCategories as $item1) {
                    $res['SubCategories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CategoryCode'])) {
            $model->categoryCode = $map['CategoryCode'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['SubCategories'])) {
            if (!empty($map['SubCategories'])) {
                $model->subCategories = [];
                $n1 = 0;
                foreach ($map['SubCategories'] as $item1) {
                    $model->subCategories[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
