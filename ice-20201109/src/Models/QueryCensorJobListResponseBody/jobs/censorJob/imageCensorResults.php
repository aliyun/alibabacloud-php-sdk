<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob;

use AlibabaCloud\SDK\ICE\V20201109\Models\QueryCensorJobListResponseBody\jobs\censorJob\imageCensorResults\imageCensorResult;
use AlibabaCloud\Tea\Model;

class imageCensorResults extends Model
{
    /**
     * @var imageCensorResult[]
     */
    public $imageCensorResult;
    protected $_name = [
        'imageCensorResult' => 'ImageCensorResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageCensorResult) {
            $res['ImageCensorResult'] = [];
            if (null !== $this->imageCensorResult && \is_array($this->imageCensorResult)) {
                $n = 0;
                foreach ($this->imageCensorResult as $item) {
                    $res['ImageCensorResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageCensorResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageCensorResult'])) {
            if (!empty($map['ImageCensorResult'])) {
                $model->imageCensorResult = [];
                $n                        = 0;
                foreach ($map['ImageCensorResult'] as $item) {
                    $model->imageCensorResult[$n++] = null !== $item ? imageCensorResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
