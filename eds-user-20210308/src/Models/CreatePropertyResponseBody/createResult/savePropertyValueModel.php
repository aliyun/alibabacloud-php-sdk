<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponseBody\createResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponseBody\createResult\savePropertyValueModel\failedPropertyValues;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\CreatePropertyResponseBody\createResult\savePropertyValueModel\savePropertyValues;

class savePropertyValueModel extends Model
{
    /**
     * @var failedPropertyValues[]
     */
    public $failedPropertyValues;

    /**
     * @var savePropertyValues[]
     */
    public $savePropertyValues;
    protected $_name = [
        'failedPropertyValues' => 'FailedPropertyValues',
        'savePropertyValues' => 'SavePropertyValues',
    ];

    public function validate()
    {
        if (\is_array($this->failedPropertyValues)) {
            Model::validateArray($this->failedPropertyValues);
        }
        if (\is_array($this->savePropertyValues)) {
            Model::validateArray($this->savePropertyValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedPropertyValues) {
            if (\is_array($this->failedPropertyValues)) {
                $res['FailedPropertyValues'] = [];
                $n1 = 0;
                foreach ($this->failedPropertyValues as $item1) {
                    $res['FailedPropertyValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->savePropertyValues) {
            if (\is_array($this->savePropertyValues)) {
                $res['SavePropertyValues'] = [];
                $n1 = 0;
                foreach ($this->savePropertyValues as $item1) {
                    $res['SavePropertyValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['FailedPropertyValues'])) {
            if (!empty($map['FailedPropertyValues'])) {
                $model->failedPropertyValues = [];
                $n1 = 0;
                foreach ($map['FailedPropertyValues'] as $item1) {
                    $model->failedPropertyValues[$n1++] = failedPropertyValues::fromMap($item1);
                }
            }
        }

        if (isset($map['SavePropertyValues'])) {
            if (!empty($map['SavePropertyValues'])) {
                $model->savePropertyValues = [];
                $n1 = 0;
                foreach ($map['SavePropertyValues'] as $item1) {
                    $model->savePropertyValues[$n1++] = savePropertyValues::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
