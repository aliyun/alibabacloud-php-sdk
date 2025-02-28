<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstanceSpec4ModifyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\QueryInstanceSpec4ModifyResponseBody\data\optionalValues;

class data extends Model
{
    /**
     * @var optionalValues[]
     */
    public $optionalValues;
    protected $_name = [
        'optionalValues' => 'OptionalValues',
    ];

    public function validate()
    {
        if (\is_array($this->optionalValues)) {
            Model::validateArray($this->optionalValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->optionalValues) {
            if (\is_array($this->optionalValues)) {
                $res['OptionalValues'] = [];
                $n1                    = 0;
                foreach ($this->optionalValues as $item1) {
                    $res['OptionalValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OptionalValues'])) {
            if (!empty($map['OptionalValues'])) {
                $model->optionalValues = [];
                $n1                    = 0;
                foreach ($map['OptionalValues'] as $item1) {
                    $model->optionalValues[$n1++] = optionalValues::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
