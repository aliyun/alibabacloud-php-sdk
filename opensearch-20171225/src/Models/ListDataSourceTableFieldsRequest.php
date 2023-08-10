<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListDataSourceTableFieldsRequest extends Model
{
    /**
     * @description {}
     *
     * @example {}
     *
     * @var string
     */
    public $params;

    /**
     * @description Whether to return the original field type of the data source
     *
     * @example false
     *
     * @var bool
     */
    public $rawType;
    protected $_name = [
        'params'  => 'params',
        'rawType' => 'rawType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListDataSourceTableFieldsRequest
     */
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
