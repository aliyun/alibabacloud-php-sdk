<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies;

use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies\fallback\destinations;
use AlibabaCloud\Tea\Model;

class fallback extends Model
{
    /**
     * @var destinations[]
     */
    public $destinations;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'destinations' => 'Destinations',
        'enable'       => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinations) {
            $res['Destinations'] = [];
            if (null !== $this->destinations && \is_array($this->destinations)) {
                $n = 0;
                foreach ($this->destinations as $item) {
                    $res['Destinations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fallback
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Destinations'])) {
            if (!empty($map['Destinations'])) {
                $model->destinations = [];
                $n                   = 0;
                foreach ($map['Destinations'] as $item) {
                    $model->destinations[$n++] = null !== $item ? destinations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
