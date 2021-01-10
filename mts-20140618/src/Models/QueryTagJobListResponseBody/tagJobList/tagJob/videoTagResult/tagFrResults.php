<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult\tagFrResults\tagFrResult;
use AlibabaCloud\Tea\Model;

class tagFrResults extends Model
{
    /**
     * @var tagFrResult[]
     */
    public $tagFrResult;
    protected $_name = [
        'tagFrResult' => 'TagFrResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagFrResult) {
            $res['TagFrResult'] = [];
            if (null !== $this->tagFrResult && \is_array($this->tagFrResult)) {
                $n = 0;
                foreach ($this->tagFrResult as $item) {
                    $res['TagFrResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagFrResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagFrResult'])) {
            if (!empty($map['TagFrResult'])) {
                $model->tagFrResult = [];
                $n                  = 0;
                foreach ($map['TagFrResult'] as $item) {
                    $model->tagFrResult[$n++] = null !== $item ? tagFrResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
