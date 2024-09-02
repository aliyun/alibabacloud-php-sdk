<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListDataSourceTableFieldsRequest extends Model
{
    /**
     * @description The parameters of the data source. The value of the params parameter is a JSON string. The value must be URL-encoded.
     *
     * Different types of data sources use different parameters. For more information, see the following sections of the "DataSource" topic:
     *
     *   [rds](https://help.aliyun.com/document_detail/170005.html)
     *   [polardb](https://help.aliyun.com/document_detail/170005.html)
     *   [odps](https://help.aliyun.com/document_detail/170005.html)
     *   [mysql](https://help.aliyun.com/document_detail/173627.html)
     *   [drds](https://help.aliyun.com/document_detail/173627.html)
     *
     * This parameter is required.
     * @example {}
     *
     * @var string
     */
    public $params;

    /**
     * @description Specifies whether to return the original field types of the data source.
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
