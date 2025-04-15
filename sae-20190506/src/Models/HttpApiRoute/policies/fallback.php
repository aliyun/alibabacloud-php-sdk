<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\HttpApiRoute\policies\fallback\destinations;

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
        'enable' => 'Enable',
    ];

    public function validate()
    {
        if (\is_array($this->destinations)) {
            Model::validateArray($this->destinations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinations) {
            if (\is_array($this->destinations)) {
                $res['Destinations'] = [];
                $n1 = 0;
                foreach ($this->destinations as $item1) {
                    $res['Destinations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Destinations'])) {
            if (!empty($map['Destinations'])) {
                $model->destinations = [];
                $n1 = 0;
                foreach ($map['Destinations'] as $item1) {
                    $model->destinations[$n1++] = destinations::fromMap($item1);
                }
            }
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
