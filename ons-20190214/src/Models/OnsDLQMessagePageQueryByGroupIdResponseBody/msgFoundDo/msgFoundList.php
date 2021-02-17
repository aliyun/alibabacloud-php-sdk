<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessagePageQueryByGroupIdResponseBody\msgFoundDo;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessagePageQueryByGroupIdResponseBody\msgFoundDo\msgFoundList\onsRestMessageDo;
use AlibabaCloud\Tea\Model;

class msgFoundList extends Model
{
    /**
     * @var onsRestMessageDo[]
     */
    public $onsRestMessageDo;
    protected $_name = [
        'onsRestMessageDo' => 'OnsRestMessageDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onsRestMessageDo) {
            $res['OnsRestMessageDo'] = [];
            if (null !== $this->onsRestMessageDo && \is_array($this->onsRestMessageDo)) {
                $n = 0;
                foreach ($this->onsRestMessageDo as $item) {
                    $res['OnsRestMessageDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return msgFoundList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnsRestMessageDo'])) {
            if (!empty($map['OnsRestMessageDo'])) {
                $model->onsRestMessageDo = [];
                $n                       = 0;
                foreach ($map['OnsRestMessageDo'] as $item) {
                    $model->onsRestMessageDo[$n++] = null !== $item ? onsRestMessageDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
