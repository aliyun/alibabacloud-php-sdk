<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponseBody\picInfo;

use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponseBody\picInfo\mainRegion\multiCategoryId;
use AlibabaCloud\Tea\Model;

class mainRegion extends Model
{
    /**
     * @var multiCategoryId[]
     */
    public $multiCategoryId;

    /**
     * @example 280,486,232,351
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'multiCategoryId' => 'MultiCategoryId',
        'region'          => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multiCategoryId) {
            $res['MultiCategoryId'] = [];
            if (null !== $this->multiCategoryId && \is_array($this->multiCategoryId)) {
                $n = 0;
                foreach ($this->multiCategoryId as $item) {
                    $res['MultiCategoryId'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return mainRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultiCategoryId'])) {
            if (!empty($map['MultiCategoryId'])) {
                $model->multiCategoryId = [];
                $n                      = 0;
                foreach ($map['MultiCategoryId'] as $item) {
                    $model->multiCategoryId[$n++] = null !== $item ? multiCategoryId::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
