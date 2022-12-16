<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\picInfo\allCategories;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameResponseBody\picInfo\multiRegion;
use AlibabaCloud\Tea\Model;

class picInfo extends Model
{
    /**
     * @var allCategories[]
     */
    public $allCategories;

    /**
     * @example 20
     *
     * @var int
     */
    public $categoryId;

    /**
     * @var multiRegion[]
     */
    public $multiRegion;

    /**
     * @example 280,486,232,351
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allCategories) {
            $res['AllCategories'] = [];
            if (null !== $this->allCategories && \is_array($this->allCategories)) {
                $n = 0;
                foreach ($this->allCategories as $item) {
                    $res['AllCategories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->multiRegion) {
            $res['MultiRegion'] = [];
            if (null !== $this->multiRegion && \is_array($this->multiRegion)) {
                $n = 0;
                foreach ($this->multiRegion as $item) {
                    $res['MultiRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return picInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllCategories'])) {
            if (!empty($map['AllCategories'])) {
                $model->allCategories = [];
                $n                    = 0;
                foreach ($map['AllCategories'] as $item) {
                    $model->allCategories[$n++] = null !== $item ? allCategories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['MultiRegion'])) {
            if (!empty($map['MultiRegion'])) {
                $model->multiRegion = [];
                $n                  = 0;
                foreach ($map['MultiRegion'] as $item) {
                    $model->multiRegion[$n++] = null !== $item ? multiRegion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
