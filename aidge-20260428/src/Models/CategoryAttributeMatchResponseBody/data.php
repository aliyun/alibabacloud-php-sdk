<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryAttributeMatchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryAttributeMatchResponseBody\data\attributes;
use AlibabaCloud\SDK\Aidge\V20260428\Models\CategoryAttributeMatchResponseBody\data\usageMap;

class data extends Model
{
    /**
     * @var attributes[]
     */
    public $attributes;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $categoryPath;

    /**
     * @var int
     */
    public $filledCount;

    /**
     * @var bool
     */
    public $matched;

    /**
     * @var int
     */
    public $totalAttributes;

    /**
     * @var usageMap
     */
    public $usageMap;
    protected $_name = [
        'attributes' => 'Attributes',
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'categoryPath' => 'CategoryPath',
        'filledCount' => 'FilledCount',
        'matched' => 'Matched',
        'totalAttributes' => 'TotalAttributes',
        'usageMap' => 'UsageMap',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (null !== $this->usageMap) {
            $this->usageMap->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['Attributes'] = [];
                $n1 = 0;
                foreach ($this->attributes as $item1) {
                    $res['Attributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->categoryPath) {
            $res['CategoryPath'] = $this->categoryPath;
        }

        if (null !== $this->filledCount) {
            $res['FilledCount'] = $this->filledCount;
        }

        if (null !== $this->matched) {
            $res['Matched'] = $this->matched;
        }

        if (null !== $this->totalAttributes) {
            $res['TotalAttributes'] = $this->totalAttributes;
        }

        if (null !== $this->usageMap) {
            $res['UsageMap'] = null !== $this->usageMap ? $this->usageMap->toArray($noStream) : $this->usageMap;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n1 = 0;
                foreach ($map['Attributes'] as $item1) {
                    $model->attributes[$n1] = attributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['CategoryPath'])) {
            $model->categoryPath = $map['CategoryPath'];
        }

        if (isset($map['FilledCount'])) {
            $model->filledCount = $map['FilledCount'];
        }

        if (isset($map['Matched'])) {
            $model->matched = $map['Matched'];
        }

        if (isset($map['TotalAttributes'])) {
            $model->totalAttributes = $map['TotalAttributes'];
        }

        if (isset($map['UsageMap'])) {
            $model->usageMap = usageMap::fromMap($map['UsageMap']);
        }

        return $model;
    }
}
