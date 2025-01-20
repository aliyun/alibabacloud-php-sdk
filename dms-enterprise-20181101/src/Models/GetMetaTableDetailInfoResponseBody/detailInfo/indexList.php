<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetMetaTableDetailInfoResponseBody\detailInfo;

use AlibabaCloud\Dara\Model;

class indexList extends Model
{
    /**
     * @var string[]
     */
    public $indexColumns;
    /**
     * @var string
     */
    public $indexId;
    /**
     * @var string
     */
    public $indexName;
    /**
     * @var string
     */
    public $indexType;
    /**
     * @var bool
     */
    public $unique;
    protected $_name = [
        'indexColumns' => 'IndexColumns',
        'indexId'      => 'IndexId',
        'indexName'    => 'IndexName',
        'indexType'    => 'IndexType',
        'unique'       => 'Unique',
    ];

    public function validate()
    {
        if (\is_array($this->indexColumns)) {
            Model::validateArray($this->indexColumns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexColumns) {
            if (\is_array($this->indexColumns)) {
                $res['IndexColumns'] = [];
                $n1                  = 0;
                foreach ($this->indexColumns as $item1) {
                    $res['IndexColumns'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexColumns'])) {
            if (!empty($map['IndexColumns'])) {
                $model->indexColumns = [];
                $n1                  = 0;
                foreach ($map['IndexColumns'] as $item1) {
                    $model->indexColumns[$n1++] = $item1;
                }
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
