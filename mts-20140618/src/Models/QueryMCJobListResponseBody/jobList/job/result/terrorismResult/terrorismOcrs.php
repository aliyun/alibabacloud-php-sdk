<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\terrorismResult\terrorismOcrs\terrorismOcr;
use AlibabaCloud\Tea\Model;

class terrorismOcrs extends Model
{
    /**
     * @var terrorismOcr[]
     */
    public $terrorismOcr;
    protected $_name = [
        'terrorismOcr' => 'TerrorismOcr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terrorismOcr) {
            $res['TerrorismOcr'] = [];
            if (null !== $this->terrorismOcr && \is_array($this->terrorismOcr)) {
                $n = 0;
                foreach ($this->terrorismOcr as $item) {
                    $res['TerrorismOcr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismOcrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerrorismOcr'])) {
            if (!empty($map['TerrorismOcr'])) {
                $model->terrorismOcr = [];
                $n                   = 0;
                foreach ($map['TerrorismOcr'] as $item) {
                    $model->terrorismOcr[$n++] = null !== $item ? terrorismOcr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
