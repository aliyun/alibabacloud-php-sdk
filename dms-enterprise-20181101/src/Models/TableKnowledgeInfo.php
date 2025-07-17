<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class TableKnowledgeInfo extends Model
{
    /**
     * @var string
     */
    public $assetDescription;

    /**
     * @var string
     */
    public $assetModifiedGmt;

    /**
     * @var ColumnKnowledgeInfo[]
     */
    public $columnList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'assetDescription' => 'AssetDescription',
        'assetModifiedGmt' => 'AssetModifiedGmt',
        'columnList' => 'ColumnList',
        'description' => 'Description',
        'summary' => 'Summary',
        'tableName' => 'TableName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetDescription) {
            $res['AssetDescription'] = $this->assetDescription;
        }
        if (null !== $this->assetModifiedGmt) {
            $res['AssetModifiedGmt'] = $this->assetModifiedGmt;
        }
        if (null !== $this->columnList) {
            $res['ColumnList'] = [];
            if (null !== $this->columnList && \is_array($this->columnList)) {
                $n = 0;
                foreach ($this->columnList as $item) {
                    $res['ColumnList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TableKnowledgeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetDescription'])) {
            $model->assetDescription = $map['AssetDescription'];
        }
        if (isset($map['AssetModifiedGmt'])) {
            $model->assetModifiedGmt = $map['AssetModifiedGmt'];
        }
        if (isset($map['ColumnList'])) {
            if (!empty($map['ColumnList'])) {
                $model->columnList = [];
                $n = 0;
                foreach ($map['ColumnList'] as $item) {
                    $model->columnList[$n++] = null !== $item ? ColumnKnowledgeInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
