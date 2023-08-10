<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\Schema;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\SchemaIndexesSearchFieldsValue;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterFields) {
            $res['filterFields'] = $this->filterFields;
        }
        if (null !== $this->searchFields) {
            $res['searchFields'] = [];
            if (null !== $this->searchFields && \is_array($this->searchFields)) {
                foreach ($this->searchFields as $key => $val) {
                    $res['searchFields'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filterFields'])) {
            if (!empty($map['filterFields'])) {
                $model->filterFields = $map['filterFields'];
            }
        }
        if (isset($map['searchFields'])) {
            $model->searchFields = $map['searchFields'];
        }

        return $model;
    }
}
