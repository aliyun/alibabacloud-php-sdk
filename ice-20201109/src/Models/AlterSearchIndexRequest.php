<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class AlterSearchIndexRequest extends Model
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
     * @example test1
     *
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'indexConfig'   => 'IndexConfig',
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
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
