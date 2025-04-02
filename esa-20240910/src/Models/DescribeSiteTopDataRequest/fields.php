<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeSiteTopDataRequest;

use AlibabaCloud\Dara\Model;

class fields extends Model
{
    /**
     * @var string[]
     */
    public $dimension;

    /**
     * @var string
     */
    public $fieldName;
    protected $_name = [
        'dimension' => 'Dimension',
        'fieldName' => 'FieldName',
    ];

    public function validate()
    {
        if (\is_array($this->dimension)) {
            Model::validateArray($this->dimension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimension) {
            if (\is_array($this->dimension)) {
                $res['Dimension'] = [];
                $n1 = 0;
                foreach ($this->dimension as $item1) {
                    $res['Dimension'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
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
        if (isset($map['Dimension'])) {
            if (!empty($map['Dimension'])) {
                $model->dimension = [];
                $n1 = 0;
                foreach ($map['Dimension'] as $item1) {
                    $model->dimension[$n1++] = $item1;
                }
            }
        }

        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }

        return $model;
    }
}
