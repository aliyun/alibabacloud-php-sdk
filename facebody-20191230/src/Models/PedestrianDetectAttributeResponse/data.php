<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse;

use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\attributes;
use AlibabaCloud\SDK\Facebody\V20191230\Models\PedestrianDetectAttributeResponse\data\boxes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $personNumber;

    /**
     * @var attributes[]
     */
    public $attributes;

    /**
     * @var boxes[]
     */
    public $boxes;
    protected $_name = [
        'personNumber' => 'PersonNumber',
        'attributes'   => 'Attributes',
        'boxes'        => 'Boxes',
    ];

    public function validate()
    {
        Model::validateRequired('personNumber', $this->personNumber, true);
        Model::validateRequired('attributes', $this->attributes, true);
        Model::validateRequired('boxes', $this->boxes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->personNumber) {
            $res['PersonNumber'] = $this->personNumber;
        }
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
        if (isset($map['PersonNumber'])) {
            $model->personNumber = $map['PersonNumber'];
        }
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

        return $model;
    }
}
