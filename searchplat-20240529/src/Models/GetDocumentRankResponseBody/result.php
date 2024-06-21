<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankResponseBody;

use AlibabaCloud\SDK\Searchplat\V20240529\Models\GetDocumentRankResponseBody\result\scores;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var scores[]
     */
    public $scores;
    protected $_name = [
        'scores' => 'scores',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scores) {
            $res['scores'] = [];
            if (null !== $this->scores && \is_array($this->scores)) {
                $n = 0;
                foreach ($this->scores as $item) {
                    $res['scores'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scores'])) {
            if (!empty($map['scores'])) {
                $model->scores = [];
                $n             = 0;
                foreach ($map['scores'] as $item) {
                    $model->scores[$n++] = null !== $item ? scores::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
