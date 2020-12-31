<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody\picInfo\allCategories;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByPicResponseBody\picInfo\multiRegion;
use AlibabaCloud\Tea\Model;

class picInfo extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var multiRegion[]
     */
    public $multiRegion;

    /**
     * @var allCategories[]
     */
    public $allCategories;
    protected $_name = [
        'region'        => 'Region',
        'categoryId'    => 'CategoryId',
        'multiRegion'   => 'MultiRegion',
        'allCategories' => 'AllCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (null !== $this->allCategories) {
            $res['AllCategories'] = [];
            if (null !== $this->allCategories && \is_array($this->allCategories)) {
                $n = 0;
                foreach ($this->allCategories as $item) {
                    $res['AllCategories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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
        if (isset($map['AllCategories'])) {
            if (!empty($map['AllCategories'])) {
                $model->allCategories = [];
                $n                    = 0;
                foreach ($map['AllCategories'] as $item) {
                    $model->allCategories[$n++] = null !== $item ? allCategories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
