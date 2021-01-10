<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\contrabandResult\contrabandTexts\contrabandText;
use AlibabaCloud\Tea\Model;

class contrabandTexts extends Model
{
    /**
     * @var contrabandText[]
     */
    public $contrabandText;
    protected $_name = [
        'contrabandText' => 'ContrabandText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contrabandText) {
            $res['ContrabandText'] = [];
            if (null !== $this->contrabandText && \is_array($this->contrabandText)) {
                $n = 0;
                foreach ($this->contrabandText as $item) {
                    $res['ContrabandText'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contrabandTexts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContrabandText'])) {
            if (!empty($map['ContrabandText'])) {
                $model->contrabandText = [];
                $n                     = 0;
                foreach ($map['ContrabandText'] as $item) {
                    $model->contrabandText[$n++] = null !== $item ? contrabandText::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
