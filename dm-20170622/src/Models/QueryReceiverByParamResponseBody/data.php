<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models\QueryReceiverByParamResponseBody;

use AlibabaCloud\SDK\Dm\V20170622\Models\QueryReceiverByParamResponseBody\data\receiver;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var receiver[]
     */
    public $receiver;
    protected $_name = [
        'receiver' => 'receiver',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receiver) {
            $res['receiver'] = [];
            if (null !== $this->receiver && \is_array($this->receiver)) {
                $n = 0;
                foreach ($this->receiver as $item) {
                    $res['receiver'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['receiver'])) {
            if (!empty($map['receiver'])) {
                $model->receiver = [];
                $n               = 0;
                foreach ($map['receiver'] as $item) {
                    $model->receiver[$n++] = null !== $item ? receiver::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
