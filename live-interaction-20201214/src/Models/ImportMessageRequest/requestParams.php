<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageRequest;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportMessageRequest\requestParams\messages;
use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var messages[]
     */
    public $messages;
    protected $_name = [
        'messages' => 'Messages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messages) {
            $res['Messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['Messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n               = 0;
                foreach ($map['Messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
