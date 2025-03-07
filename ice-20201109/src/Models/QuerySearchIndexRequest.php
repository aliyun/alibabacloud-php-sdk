<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class QuerySearchIndexRequest extends Model
{
    /**
     * @description The category of the index. Valid values:
     *
     *   mm: large visual model.
     *   face: face recognition.
     *   aiLabel: smart tagging.
     *
     * This parameter is required.
     * @example mm
     *
     * @var string
     */
    public $indexType;

    /**
     * @description The name of the search library.
     *
     *   If you leave this parameter empty, the search index is created in the default search library of Intelligent Media Service (IMS). Default value: ims-default-search-lib.
     *   To query information about an existing search library, call the [QuerySearchLib](https://help.aliyun.com/document_detail/2584455.html) API operation.
     *
     * @example test1
     *
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'indexType'     => 'IndexType',
        'searchLibName' => 'SearchLibName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySearchIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
