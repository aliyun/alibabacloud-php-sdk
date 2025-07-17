<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ColumnKnowledgeInfo extends Model
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
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $position;
    protected $_name = [
        'assetDescription' => 'AssetDescription',
        'assetModifiedGmt' => 'AssetModifiedGmt',
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
        'description' => 'Description',
        'position' => 'Position',
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
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ColumnKnowledgeInfo
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
