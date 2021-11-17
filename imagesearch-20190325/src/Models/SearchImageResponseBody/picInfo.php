<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20190325\Models\SearchImageResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20190325\Models\SearchImageResponseBody\picInfo\allCategories;
use AlibabaCloud\Tea\Model;

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
     * @var string
     */
    public $region;
    protected $_name = [
        'allCategories' => 'AllCategories',
        'categoryId'    => 'CategoryId',
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
