<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesResponseBody\indexList;

use AlibabaCloud\Tea\Model;

class index extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $indexComment;

    /**
     * @example 1
     *
     * @var string
     */
    public $indexId;

    /**
     * @example idx_test
     *
     * @var string
     */
    public $indexName;

    /**
     * @example Primary
     *
     * @var string
     */
    public $indexType;

    /**
     * @example 1
     *
     * @var string
     */
    public $tableId;
    protected $_name = [
        'indexComment' => 'IndexComment',
        'indexId'      => 'IndexId',
        'indexName'    => 'IndexName',
        'indexType'    => 'IndexType',
        'tableId'      => 'TableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexComment) {
            $res['IndexComment'] = $this->indexComment;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->indexName) {
            $res['IndexName'] = $this->indexName;
        }
        if (null !== $this->indexType) {
            $res['IndexType'] = $this->indexType;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return index
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexComment'])) {
            $model->indexComment = $map['IndexComment'];
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['IndexName'])) {
            $model->indexName = $map['IndexName'];
        }
        if (isset($map['IndexType'])) {
            $model->indexType = $map['IndexType'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        return $model;
    }
}
