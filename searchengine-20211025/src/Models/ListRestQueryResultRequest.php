<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ListRestQueryResultRequest extends Model
{
    /**
     * @description The name of the index table.
     *
     * @example main_index
     *
     * @var string
     */
    public $indexName;

    /**
     * @description The rest query statement.
     *
     * @example query%3Drelation_id%3A%221151274675_2%22%26%26cluster%3Dgeneral%26%26config%3Dstart%3A0%2Chit%3A10%2Cformat%3Ajson
     *
     * @var mixed[]
     */
    public $query;
    protected $_name = [
        'indexName' => 'indexName',
        'query' => 'query',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexName) {
            $res['indexName'] = $this->indexName;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRestQueryResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indexName'])) {
            $model->indexName = $map['indexName'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
