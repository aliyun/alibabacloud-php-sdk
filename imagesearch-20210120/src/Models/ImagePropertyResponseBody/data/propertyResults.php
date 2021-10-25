<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImagePropertyResponseBody\data;

use AlibabaCloud\SDK\ImageSearch\V20210120\Models\ImagePropertyResponseBody\data\propertyResults\values;
use AlibabaCloud\Tea\Model;

class propertyResults extends Model
{
    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $propertyId;

    /**
     * @var values[]
     */
    public $values;
    protected $_name = [
        'propertyName' => 'PropertyName',
        'propertyId'   => 'PropertyId',
        'values'       => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }
        if (null !== $this->values) {
            $res['Values'] = [];
            if (null !== $this->values && \is_array($this->values)) {
                $n = 0;
                foreach ($this->values as $item) {
                    $res['Values'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = [];
                $n             = 0;
                foreach ($map['Values'] as $item) {
                    $model->values[$n++] = null !== $item ? values::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
