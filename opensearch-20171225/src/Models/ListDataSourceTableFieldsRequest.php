<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class ListDataSourceTableFieldsRequest extends Model
{
    /**
     * @var string
     */
    public $params;

    /**
     * @var bool
     */
    public $rawType;
    protected $_name = [
        'params' => 'params',
        'rawType' => 'rawType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->rawType) {
            $res['rawType'] = $this->rawType;
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
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['rawType'])) {
            $model->rawType = $map['rawType'];
        }

        return $model;
    }
}
