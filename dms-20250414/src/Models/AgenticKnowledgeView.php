<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticKnowledgeView extends Model
{
    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var string
     */
    public $knowledgeUuid;

    /**
     * @var string
     */
    public $level;

    /**
     * @var bool
     */
    public $locked;

    /**
     * @var string
     */
    public $lockedBy;

    /**
     * @var int
     */
    public $lockedTime;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $qualifiedName;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $unitCatalogUuid;

    /**
     * @var string
     */
    public $unitDatabaseUuid;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'catalogUuid' => 'CatalogUuid',
        'columnName' => 'ColumnName',
        'createTime' => 'CreateTime',
        'databaseUuid' => 'DatabaseUuid',
        'description' => 'Description',
        'entityType' => 'EntityType',
        'extra' => 'Extra',
        'knowledgeUuid' => 'KnowledgeUuid',
        'level' => 'Level',
        'locked' => 'Locked',
        'lockedBy' => 'LockedBy',
        'lockedTime' => 'LockedTime',
        'modifyTime' => 'ModifyTime',
        'qualifiedName' => 'QualifiedName',
        'source' => 'Source',
        'summary' => 'Summary',
        'title' => 'Title',
        'unitCatalogUuid' => 'UnitCatalogUuid',
        'unitDatabaseUuid' => 'UnitDatabaseUuid',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->knowledgeUuid) {
            $res['KnowledgeUuid'] = $this->knowledgeUuid;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }

        if (null !== $this->lockedBy) {
            $res['LockedBy'] = $this->lockedBy;
        }

        if (null !== $this->lockedTime) {
            $res['LockedTime'] = $this->lockedTime;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->unitCatalogUuid) {
            $res['UnitCatalogUuid'] = $this->unitCatalogUuid;
        }

        if (null !== $this->unitDatabaseUuid) {
            $res['UnitDatabaseUuid'] = $this->unitDatabaseUuid;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['Extra'])) {
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['KnowledgeUuid'])) {
            $model->knowledgeUuid = $map['KnowledgeUuid'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }

        if (isset($map['LockedBy'])) {
            $model->lockedBy = $map['LockedBy'];
        }

        if (isset($map['LockedTime'])) {
            $model->lockedTime = $map['LockedTime'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UnitCatalogUuid'])) {
            $model->unitCatalogUuid = $map['UnitCatalogUuid'];
        }

        if (isset($map['UnitDatabaseUuid'])) {
            $model->unitDatabaseUuid = $map['UnitDatabaseUuid'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
