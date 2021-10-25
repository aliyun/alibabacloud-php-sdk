<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageCategoryResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImageCategoryResponseBody\data\cateResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var cateResult[]
     */
    public $cateResult;
    protected $_name = [
        'cateResult' => 'CateResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cateResult) {
            $res['CateResult'] = [];
            if (null !== $this->cateResult && \is_array($this->cateResult)) {
                $n = 0;
                foreach ($this->cateResult as $item) {
                    $res['CateResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CateResult'])) {
            if (!empty($map['CateResult'])) {
                $model->cateResult = [];
                $n                 = 0;
                foreach ($map['CateResult'] as $item) {
                    $model->cateResult[$n++] = null !== $item ? cateResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
