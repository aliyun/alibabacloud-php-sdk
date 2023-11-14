<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponseBody\data\tables\nativeColumns;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListTablesResponseBody\data\tables\partitionColumns;
use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var bool
     */
    public $autoRefreshEnabled;

    /**
     * @var string
     */
    public $createTableDDL;

    /**
     * @description The time when the table was created.
     *
     * @example 2022-01-17T07:07:47Z
     *
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $fileNum;

    /**
     * @var bool
     */
    public $isExternalTable;

    /**
     * @var bool
     */
    public $isOutdated;

    /**
     * @var int
     */
    public $lastAccessTime;

    /**
     * @var int
     */
    public $lastDDLTime;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $location;

    /**
     * @var bool
     */
    public $materializedView;

    /**
     * @description The name of the table.
     *
     * @example dim_odps
     *
     * @var string
     */
    public $name;

    /**
     * @var nativeColumns[]
     */
    public $nativeColumns;

    /**
     * @var string
     */
    public $odpsPropertiesRolearn;

    /**
     * @var bool
     */
    public $odpsSqlTextOptionFlushHeader;

    /**
     * @var int
     */
    public $odpsTextOptionHeaderLinesCount;

    /**
     * @description The owner of the table.
     *
     * @example 1887853961230110
     *
     * @var string
     */
    public $owner;

    /**
     * @var partitionColumns[]
     */
    public $partitionColumns;

    /**
     * @var int
     */
    public $physicalSize;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var bool
     */
    public $rewriteEnabled;

    /**
     * @description The schema of the table.
     *
     * @example default
     *
     * @var string
     */
    public $schema;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $storageHandler;

    /**
     * @var string
     */
    public $tableComment;

    /**
     * @var string
     */
    public $tableLabel;

    /**
     * @var string
     */
    public $tablesotreTableName;

    /**
     * @var string
     */
    public $tablestoreColumnsMapping;

    /**
     * @description The type of the table.
     *
     * @example internal
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $viewText;
    protected $_name = [
        'autoRefreshEnabled'             => 'autoRefreshEnabled',
        'createTableDDL'                 => 'createTableDDL',
        'creationTime'                   => 'creationTime',
        'displayName'                    => 'displayName',
        'fileNum'                        => 'fileNum',
        'isExternalTable'                => 'isExternalTable',
        'isOutdated'                     => 'isOutdated',
        'lastAccessTime'                 => 'lastAccessTime',
        'lastDDLTime'                    => 'lastDDLTime',
        'lastModifiedTime'               => 'lastModifiedTime',
        'lifecycle'                      => 'lifecycle',
        'location'                       => 'location',
        'materializedView'               => 'materializedView',
        'name'                           => 'name',
        'nativeColumns'                  => 'nativeColumns',
        'odpsPropertiesRolearn'          => 'odpsPropertiesRolearn',
        'odpsSqlTextOptionFlushHeader'   => 'odpsSqlTextOptionFlushHeader',
        'odpsTextOptionHeaderLinesCount' => 'odpsTextOptionHeaderLinesCount',
        'owner'                          => 'owner',
        'partitionColumns'               => 'partitionColumns',
        'physicalSize'                   => 'physicalSize',
        'projectName'                    => 'projectName',
        'rewriteEnabled'                 => 'rewriteEnabled',
        'schema'                         => 'schema',
        'size'                           => 'size',
        'storageHandler'                 => 'storageHandler',
        'tableComment'                   => 'tableComment',
        'tableLabel'                     => 'tableLabel',
        'tablesotreTableName'            => 'tablesotreTableName',
        'tablestoreColumnsMapping'       => 'tablestoreColumnsMapping',
        'type'                           => 'type',
        'viewText'                       => 'viewText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRefreshEnabled) {
            $res['autoRefreshEnabled'] = $this->autoRefreshEnabled;
        }
        if (null !== $this->createTableDDL) {
            $res['createTableDDL'] = $this->createTableDDL;
        }
        if (null !== $this->creationTime) {
            $res['creationTime'] = $this->creationTime;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->fileNum) {
            $res['fileNum'] = $this->fileNum;
        }
        if (null !== $this->isExternalTable) {
            $res['isExternalTable'] = $this->isExternalTable;
        }
        if (null !== $this->isOutdated) {
            $res['isOutdated'] = $this->isOutdated;
        }
        if (null !== $this->lastAccessTime) {
            $res['lastAccessTime'] = $this->lastAccessTime;
        }
        if (null !== $this->lastDDLTime) {
            $res['lastDDLTime'] = $this->lastDDLTime;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->lifecycle) {
            $res['lifecycle'] = $this->lifecycle;
        }
        if (null !== $this->location) {
            $res['location'] = $this->location;
        }
        if (null !== $this->materializedView) {
            $res['materializedView'] = $this->materializedView;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nativeColumns) {
            $res['nativeColumns'] = [];
            if (null !== $this->nativeColumns && \is_array($this->nativeColumns)) {
                $n = 0;
                foreach ($this->nativeColumns as $item) {
                    $res['nativeColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->odpsPropertiesRolearn) {
            $res['odpsPropertiesRolearn'] = $this->odpsPropertiesRolearn;
        }
        if (null !== $this->odpsSqlTextOptionFlushHeader) {
            $res['odpsSqlTextOptionFlushHeader'] = $this->odpsSqlTextOptionFlushHeader;
        }
        if (null !== $this->odpsTextOptionHeaderLinesCount) {
            $res['odpsTextOptionHeaderLinesCount'] = $this->odpsTextOptionHeaderLinesCount;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->partitionColumns) {
            $res['partitionColumns'] = [];
            if (null !== $this->partitionColumns && \is_array($this->partitionColumns)) {
                $n = 0;
                foreach ($this->partitionColumns as $item) {
                    $res['partitionColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->physicalSize) {
            $res['physicalSize'] = $this->physicalSize;
        }
        if (null !== $this->projectName) {
            $res['projectName'] = $this->projectName;
        }
        if (null !== $this->rewriteEnabled) {
            $res['rewriteEnabled'] = $this->rewriteEnabled;
        }
        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->storageHandler) {
            $res['storageHandler'] = $this->storageHandler;
        }
        if (null !== $this->tableComment) {
            $res['tableComment'] = $this->tableComment;
        }
        if (null !== $this->tableLabel) {
            $res['tableLabel'] = $this->tableLabel;
        }
        if (null !== $this->tablesotreTableName) {
            $res['tablesotreTableName'] = $this->tablesotreTableName;
        }
        if (null !== $this->tablestoreColumnsMapping) {
            $res['tablestoreColumnsMapping'] = $this->tablestoreColumnsMapping;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->viewText) {
            $res['viewText'] = $this->viewText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoRefreshEnabled'])) {
            $model->autoRefreshEnabled = $map['autoRefreshEnabled'];
        }
        if (isset($map['createTableDDL'])) {
            $model->createTableDDL = $map['createTableDDL'];
        }
        if (isset($map['creationTime'])) {
            $model->creationTime = $map['creationTime'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['fileNum'])) {
            $model->fileNum = $map['fileNum'];
        }
        if (isset($map['isExternalTable'])) {
            $model->isExternalTable = $map['isExternalTable'];
        }
        if (isset($map['isOutdated'])) {
            $model->isOutdated = $map['isOutdated'];
        }
        if (isset($map['lastAccessTime'])) {
            $model->lastAccessTime = $map['lastAccessTime'];
        }
        if (isset($map['lastDDLTime'])) {
            $model->lastDDLTime = $map['lastDDLTime'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['lifecycle'])) {
            $model->lifecycle = $map['lifecycle'];
        }
        if (isset($map['location'])) {
            $model->location = $map['location'];
        }
        if (isset($map['materializedView'])) {
            $model->materializedView = $map['materializedView'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nativeColumns'])) {
            if (!empty($map['nativeColumns'])) {
                $model->nativeColumns = [];
                $n                    = 0;
                foreach ($map['nativeColumns'] as $item) {
                    $model->nativeColumns[$n++] = null !== $item ? nativeColumns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['odpsPropertiesRolearn'])) {
            $model->odpsPropertiesRolearn = $map['odpsPropertiesRolearn'];
        }
        if (isset($map['odpsSqlTextOptionFlushHeader'])) {
            $model->odpsSqlTextOptionFlushHeader = $map['odpsSqlTextOptionFlushHeader'];
        }
        if (isset($map['odpsTextOptionHeaderLinesCount'])) {
            $model->odpsTextOptionHeaderLinesCount = $map['odpsTextOptionHeaderLinesCount'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['partitionColumns'])) {
            if (!empty($map['partitionColumns'])) {
                $model->partitionColumns = [];
                $n                       = 0;
                foreach ($map['partitionColumns'] as $item) {
                    $model->partitionColumns[$n++] = null !== $item ? partitionColumns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['physicalSize'])) {
            $model->physicalSize = $map['physicalSize'];
        }
        if (isset($map['projectName'])) {
            $model->projectName = $map['projectName'];
        }
        if (isset($map['rewriteEnabled'])) {
            $model->rewriteEnabled = $map['rewriteEnabled'];
        }
        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['storageHandler'])) {
            $model->storageHandler = $map['storageHandler'];
        }
        if (isset($map['tableComment'])) {
            $model->tableComment = $map['tableComment'];
        }
        if (isset($map['tableLabel'])) {
            $model->tableLabel = $map['tableLabel'];
        }
        if (isset($map['tablesotreTableName'])) {
            $model->tablesotreTableName = $map['tablesotreTableName'];
        }
        if (isset($map['tablestoreColumnsMapping'])) {
            $model->tablestoreColumnsMapping = $map['tablestoreColumnsMapping'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['viewText'])) {
            $model->viewText = $map['viewText'];
        }

        return $model;
    }
}
