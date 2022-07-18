<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDestinationResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDestinationResponseBody\data\destinations;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var destinations[]
     */
    public $destinations;
    protected $_name = [
        'destinations' => 'destinations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinations) {
            $res['destinations'] = [];
            if (null !== $this->destinations && \is_array($this->destinations)) {
                $n = 0;
                foreach ($this->destinations as $item) {
                    $res['destinations'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['destinations'])) {
            if (!empty($map['destinations'])) {
                $model->destinations = [];
                $n                   = 0;
                foreach ($map['destinations'] as $item) {
                    $model->destinations[$n++] = null !== $item ? destinations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
