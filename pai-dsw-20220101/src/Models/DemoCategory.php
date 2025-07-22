<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DemoCategory extends Model
{
    /**
     * @example sdk
     *
     * @var string
     */
    public $categoryCode;

    /**
     * @example SDK Usage
     *
     * @var string
     */
    public $categoryName;

    /**
     * @example 12
     *
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

    public function validate() {}

    public function toMap()
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
            $res['SubCategories'] = [];
            if (null !== $this->subCategories && \is_array($this->subCategories)) {
                $n = 0;
                foreach ($this->subCategories as $item) {
                    $res['SubCategories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DemoCategory
     */
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
                $n = 0;
                foreach ($map['SubCategories'] as $item) {
                    $model->subCategories[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
