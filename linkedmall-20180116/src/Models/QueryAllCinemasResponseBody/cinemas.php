<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCinemasResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAllCinemasResponseBody\cinemas\cinema;
use AlibabaCloud\Tea\Model;

class cinemas extends Model
{
    /**
     * @var cinema[]
     */
    public $cinema;
    protected $_name = [
        'cinema' => 'Cinema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cinema) {
            $res['Cinema'] = [];
            if (null !== $this->cinema && \is_array($this->cinema)) {
                $n = 0;
                foreach ($this->cinema as $item) {
                    $res['Cinema'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cinemas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cinema'])) {
            if (!empty($map['Cinema'])) {
                $model->cinema = [];
                $n             = 0;
                foreach ($map['Cinema'] as $item) {
                    $model->cinema[$n++] = null !== $item ? cinema::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
