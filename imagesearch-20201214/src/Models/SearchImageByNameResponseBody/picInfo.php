<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\picInfo\allCategories;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\picInfo\multiRegion;

class picInfo extends Model
{
    /**
     * @var allCategories[]
     */
    public $allCategories;
    /**
     * @var int
     */
    public $categoryId;
    /**
     * @var multiRegion[]
     */
    public $multiRegion;
    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'allCategories' => 'AllCategories',
        'categoryId'    => 'CategoryId',
        'multiRegion'   => 'MultiRegion',
        'region'        => 'Region',
    ];

    public function validate()
    {
        if (\is_array($this->allCategories)) {
            Model::validateArray($this->allCategories);
        }
        if (\is_array($this->multiRegion)) {
            Model::validateArray($this->multiRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allCategories) {
            if (\is_array($this->allCategories)) {
                $res['AllCategories'] = [];
                $n1                   = 0;
                foreach ($this->allCategories as $item1) {
                    $res['AllCategories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->multiRegion) {
            if (\is_array($this->multiRegion)) {
                $res['MultiRegion'] = [];
                $n1                 = 0;
                foreach ($this->multiRegion as $item1) {
                    $res['MultiRegion'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['AllCategories'])) {
            if (!empty($map['AllCategories'])) {
                $model->allCategories = [];
                $n1                   = 0;
                foreach ($map['AllCategories'] as $item1) {
                    $model->allCategories[$n1++] = allCategories::fromMap($item1);
                }
            }
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['MultiRegion'])) {
            if (!empty($map['MultiRegion'])) {
                $model->multiRegion = [];
                $n1                 = 0;
                foreach ($map['MultiRegion'] as $item1) {
                    $model->multiRegion[$n1++] = multiRegion::fromMap($item1);
                }
            }
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
