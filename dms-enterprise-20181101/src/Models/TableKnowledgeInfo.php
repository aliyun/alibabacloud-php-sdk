<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->columnList)) {
            Model::validateArray($this->columnList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetDescription) {
            $res['AssetDescription'] = $this->assetDescription;
        }

        if (null !== $this->assetModifiedGmt) {
            $res['AssetModifiedGmt'] = $this->assetModifiedGmt;
        }

        if (null !== $this->columnList) {
            if (\is_array($this->columnList)) {
                $res['ColumnList'] = [];
                $n1 = 0;
                foreach ($this->columnList as $item1) {
                    $res['ColumnList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ColumnList'] as $item1) {
                    $model->columnList[$n1] = ColumnKnowledgeInfo::fromMap($item1);
                    ++$n1;
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
