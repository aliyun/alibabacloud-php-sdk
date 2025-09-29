<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryCollectionDataResponseBody\matches\match\sparseValues;

use AlibabaCloud\Dara\Model;

class values extends Model
{
    /**
     * @var float[]
     */
    public $value;
    protected $_name = [
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['Value'] = [];
                $n1 = 0;
                foreach ($this->value as $item1) {
                    $res['Value'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n1 = 0;
                foreach ($map['Value'] as $item1) {
                    $model->value[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
