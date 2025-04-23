<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class ListFunctionsRequest extends Model
{
    /**
     * @var string
     */
    public $marker;

    /**
     * @var int
     */
    public $maxItem;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $schemaName;
    protected $_name = [
        'marker' => 'marker',
        'maxItem' => 'maxItem',
        'prefix' => 'prefix',
        'schemaName' => 'schemaName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
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
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }

        return $model;
    }
}
