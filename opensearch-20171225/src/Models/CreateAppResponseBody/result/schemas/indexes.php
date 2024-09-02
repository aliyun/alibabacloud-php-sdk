<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponseBody\result\schemas;

use AlibabaCloud\Tea\Model;

class indexes extends Model
{
    /**
     * @var string[]
     */
    public $filterFields;

    /**
     * @var mixed[]
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
            $res['searchFields'] = $this->searchFields;
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
