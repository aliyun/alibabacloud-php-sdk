<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AlterSearchIndexRequest extends Model
{
    /**
     * @description The configurations of the index.
     *
     * >  You must specify either IndexStatus or IndexConfig.
     * @example {}
     *
     * @var string
     */
    public $indexConfig;

    /**
     * @description The state of the index. Valid values:
     *
     *   active (default): the index is enabled.
     *   Deactive: the index is not enabled.
     *
     * >  You must specify either IndexStatus or IndexConfig.
     * @example Active
     *
     * @var string
     */
    public $indexStatus;

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
        'indexConfig'   => 'IndexConfig',
        'indexStatus'   => 'IndexStatus',
        'indexType'     => 'IndexType',
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
        if (null !== $this->indexStatus) {
            $res['IndexStatus'] = $this->indexStatus;
        }
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
     * @return AlterSearchIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexConfig'])) {
            $model->indexConfig = $map['IndexConfig'];
        }
        if (isset($map['IndexStatus'])) {
            $model->indexStatus = $map['IndexStatus'];
        }
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
