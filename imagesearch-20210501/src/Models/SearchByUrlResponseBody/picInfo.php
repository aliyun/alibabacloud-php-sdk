<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponseBody\picInfo\mainRegion;
use AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponseBody\picInfo\multiRegion;
use AlibabaCloud\Tea\Model;

class picInfo extends Model
{
    /**
     * @var mainRegion
     */
    public $mainRegion;

    /**
     * @var multiRegion[]
     */
    public $multiRegion;
    protected $_name = [
        'mainRegion'  => 'MainRegion',
        'multiRegion' => 'MultiRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainRegion) {
            $res['MainRegion'] = null !== $this->mainRegion ? $this->mainRegion->toMap() : null;
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
        if (isset($map['MainRegion'])) {
            $model->mainRegion = mainRegion::fromMap($map['MainRegion']);
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

        return $model;
    }
}
