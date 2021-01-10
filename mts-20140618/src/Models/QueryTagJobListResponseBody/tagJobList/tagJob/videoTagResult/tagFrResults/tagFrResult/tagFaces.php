<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult\tagFrResults\tagFrResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTagJobListResponseBody\tagJobList\tagJob\videoTagResult\tagFrResults\tagFrResult\tagFaces\tagFace;
use AlibabaCloud\Tea\Model;

class tagFaces extends Model
{
    /**
     * @var tagFace[]
     */
    public $tagFace;
    protected $_name = [
        'tagFace' => 'TagFace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagFace) {
            $res['TagFace'] = [];
            if (null !== $this->tagFace && \is_array($this->tagFace)) {
                $n = 0;
                foreach ($this->tagFace as $item) {
                    $res['TagFace'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagFaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagFace'])) {
            if (!empty($map['TagFace'])) {
                $model->tagFace = [];
                $n              = 0;
                foreach ($map['TagFace'] as $item) {
                    $model->tagFace[$n++] = null !== $item ? tagFace::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
