<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListMetaProfilingResultCatalogPageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $created;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var int
     */
    public $metaDatasourceId;

    /**
     * @var string
     */
    public $metaDatasourceType;

    /**
     * @var float
     */
    public $migrationProgress;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var int
     */
    public $partitionCount;

    /**
     * @var int
     */
    public $ptTableCount;

    /**
     * @var int
     */
    public $recordCount;

    /**
     * @var int
     */
    public $schemaCount;

    /**
     * @var string
     */
    public $storageSize;

    /**
     * @var int
     */
    public $tableCount;

    /**
     * @var int
     */
    public $viewCount;
    protected $_name = [
        'catalogName' => 'catalogName',
        'created' => 'created',
        'jobId' => 'jobId',
        'lastModified' => 'lastModified',
        'metaDatasourceId' => 'metaDatasourceId',
        'metaDatasourceType' => 'metaDatasourceType',
        'migrationProgress' => 'migrationProgress',
        'migrationStatus' => 'migrationStatus',
        'partitionCount' => 'partitionCount',
        'ptTableCount' => 'ptTableCount',
        'recordCount' => 'recordCount',
        'schemaCount' => 'schemaCount',
        'storageSize' => 'storageSize',
        'tableCount' => 'tableCount',
        'viewCount' => 'viewCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['catalogName'] = $this->catalogName;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }

        if (null !== $this->lastModified) {
            $res['lastModified'] = $this->lastModified;
        }

        if (null !== $this->metaDatasourceId) {
            $res['metaDatasourceId'] = $this->metaDatasourceId;
        }

        if (null !== $this->metaDatasourceType) {
            $res['metaDatasourceType'] = $this->metaDatasourceType;
        }

        if (null !== $this->migrationProgress) {
            $res['migrationProgress'] = $this->migrationProgress;
        }

        if (null !== $this->migrationStatus) {
            $res['migrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->partitionCount) {
            $res['partitionCount'] = $this->partitionCount;
        }

        if (null !== $this->ptTableCount) {
            $res['ptTableCount'] = $this->ptTableCount;
        }

        if (null !== $this->recordCount) {
            $res['recordCount'] = $this->recordCount;
        }

        if (null !== $this->schemaCount) {
            $res['schemaCount'] = $this->schemaCount;
        }

        if (null !== $this->storageSize) {
            $res['storageSize'] = $this->storageSize;
        }

        if (null !== $this->tableCount) {
            $res['tableCount'] = $this->tableCount;
        }

        if (null !== $this->viewCount) {
            $res['viewCount'] = $this->viewCount;
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
        if (isset($map['catalogName'])) {
            $model->catalogName = $map['catalogName'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }

        if (isset($map['lastModified'])) {
            $model->lastModified = $map['lastModified'];
        }

        if (isset($map['metaDatasourceId'])) {
            $model->metaDatasourceId = $map['metaDatasourceId'];
        }

        if (isset($map['metaDatasourceType'])) {
            $model->metaDatasourceType = $map['metaDatasourceType'];
        }

        if (isset($map['migrationProgress'])) {
            $model->migrationProgress = $map['migrationProgress'];
        }

        if (isset($map['migrationStatus'])) {
            $model->migrationStatus = $map['migrationStatus'];
        }

        if (isset($map['partitionCount'])) {
            $model->partitionCount = $map['partitionCount'];
        }

        if (isset($map['ptTableCount'])) {
            $model->ptTableCount = $map['ptTableCount'];
        }

        if (isset($map['recordCount'])) {
            $model->recordCount = $map['recordCount'];
        }

        if (isset($map['schemaCount'])) {
            $model->schemaCount = $map['schemaCount'];
        }

        if (isset($map['storageSize'])) {
            $model->storageSize = $map['storageSize'];
        }

        if (isset($map['tableCount'])) {
            $model->tableCount = $map['tableCount'];
        }

        if (isset($map['viewCount'])) {
            $model->viewCount = $map['viewCount'];
        }

        return $model;
    }
}
