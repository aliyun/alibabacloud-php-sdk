<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class CategoryAttributeMatchRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $itemSpec;

    /**
     * @var string
     */
    public $sku;

    /**
     * @var string
     */
    public $sourceCategory;

    /**
     * @var string
     */
    public $sourcePlatform;

    /**
     * @var string
     */
    public $targetPlatform;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'description' => 'Description',
        'imageUrl' => 'ImageUrl',
        'itemSpec' => 'ItemSpec',
        'sku' => 'Sku',
        'sourceCategory' => 'SourceCategory',
        'sourcePlatform' => 'SourcePlatform',
        'targetPlatform' => 'TargetPlatform',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->imageUrl)) {
            Model::validateArray($this->imageUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->imageUrl) {
            if (\is_array($this->imageUrl)) {
                $res['ImageUrl'] = [];
                $n1 = 0;
                foreach ($this->imageUrl as $item1) {
                    $res['ImageUrl'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemSpec) {
            $res['ItemSpec'] = $this->itemSpec;
        }

        if (null !== $this->sku) {
            $res['Sku'] = $this->sku;
        }

        if (null !== $this->sourceCategory) {
            $res['SourceCategory'] = $this->sourceCategory;
        }

        if (null !== $this->sourcePlatform) {
            $res['SourcePlatform'] = $this->sourcePlatform;
        }

        if (null !== $this->targetPlatform) {
            $res['TargetPlatform'] = $this->targetPlatform;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImageUrl'])) {
            if (!empty($map['ImageUrl'])) {
                $model->imageUrl = [];
                $n1 = 0;
                foreach ($map['ImageUrl'] as $item1) {
                    $model->imageUrl[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemSpec'])) {
            $model->itemSpec = $map['ItemSpec'];
        }

        if (isset($map['Sku'])) {
            $model->sku = $map['Sku'];
        }

        if (isset($map['SourceCategory'])) {
            $model->sourceCategory = $map['SourceCategory'];
        }

        if (isset($map['SourcePlatform'])) {
            $model->sourcePlatform = $map['SourcePlatform'];
        }

        if (isset($map['TargetPlatform'])) {
            $model->targetPlatform = $map['TargetPlatform'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
