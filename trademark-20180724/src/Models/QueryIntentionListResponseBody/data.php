<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionListResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionListResponseBody\data\intention;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var intention[]
     */
    public $intention;
    protected $_name = [
        'intention' => 'Intention',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intention) {
            $res['Intention'] = [];
            if (null !== $this->intention && \is_array($this->intention)) {
                $n = 0;
                foreach ($this->intention as $item) {
                    $res['Intention'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Intention'])) {
            if (!empty($map['Intention'])) {
                $model->intention = [];
                $n                = 0;
                foreach ($map['Intention'] as $item) {
                    $model->intention[$n++] = null !== $item ? intention::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
