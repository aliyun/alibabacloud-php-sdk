<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDestinationResponse;

use AlibabaCloud\Tea\Model;

class destinations extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Iot\V20180120\Models\ListDestinationResponse\destinations\destinations[]
     */
    public $destinations;
    protected $_name = [
        'destinations' => 'destinations',
    ];

    public function validate()
    {
        Model::validateRequired('destinations', $this->destinations, true);
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
     * @return destinations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['destinations'])) {
            if (!empty($map['destinations'])) {
                $model->destinations = [];
                $n                   = 0;
                foreach ($map['destinations'] as $item) {
                    $model->destinations[$n++] = null !== $item ? \AlibabaCloud\SDK\Iot\V20180120\Models\ListDestinationResponse\destinations\destinations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
