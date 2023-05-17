<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponseBody\updateResult;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponseBody\updateResult\savePropertyValueModel\failedPropertyValues;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UpdatePropertyResponseBody\updateResult\savePropertyValueModel\savePropertyValues;
use AlibabaCloud\Tea\Model;

class savePropertyValueModel extends Model
{
    /**
     * @description UpdateProperty
     *
     * @var failedPropertyValues[]
     */
    public $failedPropertyValues;

    /**
     * @description The ID of the request.
     *
     * @var savePropertyValues[]
     */
    public $savePropertyValues;
    protected $_name = [
        'failedPropertyValues' => 'FailedPropertyValues',
        'savePropertyValues'   => 'SavePropertyValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedPropertyValues) {
            $res['FailedPropertyValues'] = [];
            if (null !== $this->failedPropertyValues && \is_array($this->failedPropertyValues)) {
                $n = 0;
                foreach ($this->failedPropertyValues as $item) {
                    $res['FailedPropertyValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->savePropertyValues) {
            $res['SavePropertyValues'] = [];
            if (null !== $this->savePropertyValues && \is_array($this->savePropertyValues)) {
                $n = 0;
                foreach ($this->savePropertyValues as $item) {
                    $res['SavePropertyValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return savePropertyValueModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedPropertyValues'])) {
            if (!empty($map['FailedPropertyValues'])) {
                $model->failedPropertyValues = [];
                $n                           = 0;
                foreach ($map['FailedPropertyValues'] as $item) {
                    $model->failedPropertyValues[$n++] = null !== $item ? failedPropertyValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SavePropertyValues'])) {
            if (!empty($map['SavePropertyValues'])) {
                $model->savePropertyValues = [];
                $n                         = 0;
                foreach ($map['SavePropertyValues'] as $item) {
                    $model->savePropertyValues[$n++] = null !== $item ? savePropertyValues::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
