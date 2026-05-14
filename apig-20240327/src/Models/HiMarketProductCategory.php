<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class HiMarketProductCategory extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var HiMarketIcon
     */
    public $icon;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'categoryId' => 'categoryId',
        'description' => 'description',
        'icon' => 'icon',
        'name' => 'name',
    ];

    public function validate()
    {
        if (null !== $this->icon) {
            $this->icon->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['categoryId'] = $this->categoryId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->icon) {
            $res['icon'] = null !== $this->icon ? $this->icon->toArray($noStream) : $this->icon;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['categoryId'])) {
            $model->categoryId = $map['categoryId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['icon'])) {
            $model->icon = HiMarketIcon::fromMap($map['icon']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
