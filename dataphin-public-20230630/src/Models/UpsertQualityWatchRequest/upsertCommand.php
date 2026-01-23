<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityWatchRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityWatchRequest\upsertCommand\dataSourceInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityWatchRequest\upsertCommand\indexInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityWatchRequest\upsertCommand\tableInfo;

class upsertCommand extends Model
{
    /**
     * @var dataSourceInfo
     */
    public $dataSourceInfo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var indexInfo
     */
    public $indexInfo;

    /**
     * @var string
     */
    public $qualityOwner;

    /**
     * @var tableInfo
     */
    public $tableInfo;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSourceInfo' => 'DataSourceInfo',
        'id' => 'Id',
        'indexInfo' => 'IndexInfo',
        'qualityOwner' => 'QualityOwner',
        'tableInfo' => 'TableInfo',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->dataSourceInfo) {
            $this->dataSourceInfo->validate();
        }
        if (null !== $this->indexInfo) {
            $this->indexInfo->validate();
        }
        if (null !== $this->tableInfo) {
            $this->tableInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceInfo) {
            $res['DataSourceInfo'] = null !== $this->dataSourceInfo ? $this->dataSourceInfo->toArray($noStream) : $this->dataSourceInfo;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->indexInfo) {
            $res['IndexInfo'] = null !== $this->indexInfo ? $this->indexInfo->toArray($noStream) : $this->indexInfo;
        }

        if (null !== $this->qualityOwner) {
            $res['QualityOwner'] = $this->qualityOwner;
        }

        if (null !== $this->tableInfo) {
            $res['TableInfo'] = null !== $this->tableInfo ? $this->tableInfo->toArray($noStream) : $this->tableInfo;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DataSourceInfo'])) {
            $model->dataSourceInfo = dataSourceInfo::fromMap($map['DataSourceInfo']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IndexInfo'])) {
            $model->indexInfo = indexInfo::fromMap($map['IndexInfo']);
        }

        if (isset($map['QualityOwner'])) {
            $model->qualityOwner = $map['QualityOwner'];
        }

        if (isset($map['TableInfo'])) {
            $model->tableInfo = tableInfo::fromMap($map['TableInfo']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
