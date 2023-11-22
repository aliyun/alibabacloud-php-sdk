<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class QuerySearchIndexResponseBody extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $indexConfig;

    /**
     * @example mm
     *
     * @var string
     */
    public $indexType;

    /**
     * @description Id of the request
     *
     * @example 4E84BE44-58A7-****-****-FBEBEA16EF94
     *
     * @var string
     */
    public $requestId;

    /**
     * @example test1
     *
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'indexConfig'   => 'IndexConfig',
        'indexType'     => 'IndexType',
        'requestId'     => 'RequestId',
        'searchLibName' => 'SearchLibName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexConfig) {
            $res['IndexConfig'] = $this->indexConfig;
        }
        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySearchIndexResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexConfig'])) {
            $model->indexConfig = $map['IndexConfig'];
        }
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
