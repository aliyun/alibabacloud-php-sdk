<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody;

use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\attributes;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponseBody\data\boxes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var attributes[]
     */
    public $attributes;

    /**
     * @var boxes[]
     */
    public $boxes;

    /**
     * @var int
     */
    public $personNumber;
    protected $_name = [
        'attributes'   => 'Attributes',
        'boxes'        => 'Boxes',
        'personNumber' => 'PersonNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['Attributes'] = [];
            if (null !== $this->attributes && \is_array($this->attributes)) {
                $n = 0;
                foreach ($this->attributes as $item) {
                    $res['Attributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->boxes) {
            $res['Boxes'] = [];
            if (null !== $this->boxes && \is_array($this->boxes)) {
                $n = 0;
                foreach ($this->boxes as $item) {
                    $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->personNumber) {
            $res['PersonNumber'] = $this->personNumber;
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
        if (isset($map['Attributes'])) {
            if (!empty($map['Attributes'])) {
                $model->attributes = [];
                $n                 = 0;
                foreach ($map['Attributes'] as $item) {
                    $model->attributes[$n++] = null !== $item ? attributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? boxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PersonNumber'])) {
            $model->personNumber = $map['PersonNumber'];
        }

        return $model;
    }
}
