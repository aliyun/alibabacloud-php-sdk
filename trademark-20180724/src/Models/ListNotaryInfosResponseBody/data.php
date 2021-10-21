<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryInfosResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\ListNotaryInfosResponseBody\data\notaryInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var notaryInfo[]
     */
    public $notaryInfo;
    protected $_name = [
        'notaryInfo' => 'NotaryInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notaryInfo) {
            $res['NotaryInfo'] = [];
            if (null !== $this->notaryInfo && \is_array($this->notaryInfo)) {
                $n = 0;
                foreach ($this->notaryInfo as $item) {
                    $res['NotaryInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['NotaryInfo'])) {
            if (!empty($map['NotaryInfo'])) {
                $model->notaryInfo = [];
                $n                 = 0;
                foreach ($map['NotaryInfo'] as $item) {
                    $model->notaryInfo[$n++] = null !== $item ? notaryInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
