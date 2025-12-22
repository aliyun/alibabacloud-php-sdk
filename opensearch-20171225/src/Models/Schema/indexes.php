<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\Schema;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SchemaIndexesSearchFieldsValue;

class indexes extends Model
{
    /**
     * @var string[]
     */
    public $filterFields;

    /**
     * @var SchemaIndexesSearchFieldsValue[]
     */
    public $searchFields;
    protected $_name = [
        'filterFields' => 'filterFields',
        'searchFields' => 'searchFields',
    ];

    public function validate()
    {
        if (\is_array($this->filterFields)) {
            Model::validateArray($this->filterFields);
        }
        if (\is_array($this->searchFields)) {
            Model::validateArray($this->searchFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterFields) {
            if (\is_array($this->filterFields)) {
                $res['filterFields'] = [];
                $n1 = 0;
                foreach ($this->filterFields as $item1) {
                    $res['filterFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchFields) {
            if (\is_array($this->searchFields)) {
                $res['searchFields'] = [];
                foreach ($this->searchFields as $key1 => $value1) {
                    $res['searchFields'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['filterFields'])) {
            if (!empty($map['filterFields'])) {
                $model->filterFields = [];
                $n1 = 0;
                foreach ($map['filterFields'] as $item1) {
                    $model->filterFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['searchFields'])) {
            if (!empty($map['searchFields'])) {
                $model->searchFields = [];
                foreach ($map['searchFields'] as $key1 => $value1) {
                    $model->searchFields[$key1] = SchemaIndexesSearchFieldsValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
