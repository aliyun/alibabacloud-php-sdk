<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult\tagAnResults\tagAnResult;
use AlibabaCloud\Tea\Model;

class tagAnResults extends Model
{
    /**
     * @var tagAnResult[]
     */
    public $tagAnResult;
    protected $_name = [
        'tagAnResult' => 'TagAnResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagAnResult) {
            $res['TagAnResult'] = [];
            if (null !== $this->tagAnResult && \is_array($this->tagAnResult)) {
                $n = 0;
                foreach ($this->tagAnResult as $item) {
                    $res['TagAnResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagAnResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagAnResult'])) {
            if (!empty($map['TagAnResult'])) {
                $model->tagAnResult = [];
                $n                  = 0;
                foreach ($map['TagAnResult'] as $item) {
                    $model->tagAnResult[$n++] = null !== $item ? tagAnResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
