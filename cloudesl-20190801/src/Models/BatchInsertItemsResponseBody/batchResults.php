<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\BatchInsertItemsResponseBody;

use AlibabaCloud\SDK\Cloudesl\V20190801\Models\BatchInsertItemsResponseBody\batchResults\batchResult;
use AlibabaCloud\Tea\Model;

class batchResults extends Model
{
    /**
     * @var batchResult[]
     */
    public $batchResult;
    protected $_name = [
        'batchResult' => 'BatchResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchResult) {
            $res['BatchResult'] = [];
            if (null !== $this->batchResult && \is_array($this->batchResult)) {
                $n = 0;
                foreach ($this->batchResult as $item) {
                    $res['BatchResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchResult'])) {
            if (!empty($map['BatchResult'])) {
                $model->batchResult = [];
                $n                  = 0;
                foreach ($map['BatchResult'] as $item) {
                    $model->batchResult[$n++] = null !== $item ? batchResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
