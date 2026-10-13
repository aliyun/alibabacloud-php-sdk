<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateProductRequest extends Model
{
    /**
     * @var bool
     */
    public $autoApprove;

    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $document;

    /**
     * @var HiMarketProductFeature
     */
    public $feature;

    /**
     * @var HiMarketIcon
     */
    public $icon;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'autoApprove' => 'autoApprove',
        'categories' => 'categories',
        'description' => 'description',
        'document' => 'document',
        'feature' => 'feature',
        'icon' => 'icon',
        'name' => 'name',
        'type' => 'type',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (null !== $this->feature) {
            $this->feature->validate();
        }
        if (null !== $this->icon) {
            $this->icon->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoApprove) {
            $res['autoApprove'] = $this->autoApprove;
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->feature) {
            $res['feature'] = null !== $this->feature ? $this->feature->toArray($noStream) : $this->feature;
        }

        if (null !== $this->icon) {
            $res['icon'] = null !== $this->icon ? $this->icon->toArray($noStream) : $this->icon;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['autoApprove'])) {
            $model->autoApprove = $map['autoApprove'];
        }

        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['feature'])) {
            $model->feature = HiMarketProductFeature::fromMap($map['feature']);
        }

        if (isset($map['icon'])) {
            $model->icon = HiMarketIcon::fromMap($map['icon']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
