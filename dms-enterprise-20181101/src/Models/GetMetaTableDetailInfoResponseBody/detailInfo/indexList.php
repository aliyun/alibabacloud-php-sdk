<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo;

use AlibabaCloud\Tea\Model;

class indexList extends Model
{
    /**
     * @description The index column.
     *
     * @var string[]
     */
    public $indexColumns;

    /**
     * @description The ID of the index.
     *
     * @example 123
     *
     * @var string
     */
    public $indexId;

    /**
     * @description The name of the index.
     *
     * @example PRIMARY
     *
     * @var string
     */
    public $indexName;

    /**
     * @description The type of the index. Examples: Primary, Unique, and Normal.
     *
     * @example Primary
     *
     * @var string
     */
    public $indexType;

    /**
     * @description Indicates whether the index is unique. Valid values:
     *
     *   true: The index is unique.
     *   false: The index is not unique.
     *
     * @example false
     *
     * @var bool
     */
    public $unique;
    protected $_name = [
        'indexColumns' => 'IndexColumns',
        'indexId' => 'IndexId',
        'indexName' => 'IndexName',
        'indexType' => 'IndexType',
        'unique' => 'Unique',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexColumns) {
            $res['IndexColumns'] = $this->indexColumns;
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
        if (null !== $this->unique) {
            $res['Unique'] = $this->unique;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexColumns'])) {
            if (!empty($map['IndexColumns'])) {
                $model->indexColumns = $map['IndexColumns'];
            }
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
        if (isset($map['Unique'])) {
            $model->unique = $map['Unique'];
        }

        return $model;
    }
}
