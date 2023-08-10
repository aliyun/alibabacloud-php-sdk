<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\Schema;

use AlibabaCloud\Tea\Model;

class indexSortConfig extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $field;
    protected $_name = [
        'direction' => 'direction',
        'field'     => 'field',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }
        if (null !== $this->field) {
            $res['field'] = $this->field;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexSortConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }
        if (isset($map['field'])) {
            $model->field = $map['field'];
        }

        return $model;
    }
}
