<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim;

use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders\holder;
use AlibabaCloud\Tea\Model;

class holders extends Model
{
    /**
     * @var holder[]
     */
    public $holder;
    protected $_name = [
        'holder' => 'Holder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->holder) {
            $res['Holder'] = [];
            if (null !== $this->holder && \is_array($this->holder)) {
                $n = 0;
                foreach ($this->holder as $item) {
                    $res['Holder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return holders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Holder'])) {
            if (!empty($map['Holder'])) {
                $model->holder = [];
                $n             = 0;
                foreach ($map['Holder'] as $item) {
                    $model->holder[$n++] = null !== $item ? holder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
