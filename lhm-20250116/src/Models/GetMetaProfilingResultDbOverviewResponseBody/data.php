<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetMetaProfilingResultDbOverviewResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $catalogCount;

    /**
     * @var int
     */
    public $componentId;

    /**
     * @var int
     */
    public $componentType;

    /**
     * @var string
     */
    public $dsName;

    /**
     * @var string
     */
    public $dsVersion;

    /**
     * @var int
     */
    public $etTableCount;

    /**
     * @var int
     */
    public $funcCount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var int
     */
    public $noPtTableCount;

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
    public $transactionalCount;

    /**
     * @var int
     */
    public $viewCount;
    protected $_name = [
        'catalogCount' => 'catalogCount',
        'componentId' => 'componentId',
        'componentType' => 'componentType',
        'dsName' => 'dsName',
        'dsVersion' => 'dsVersion',
        'etTableCount' => 'etTableCount',
        'funcCount' => 'funcCount',
        'gmtCreate' => 'gmtCreate',
        'lastModified' => 'lastModified',
        'noPtTableCount' => 'noPtTableCount',
        'partitionCount' => 'partitionCount',
        'ptTableCount' => 'ptTableCount',
        'recordCount' => 'recordCount',
        'schemaCount' => 'schemaCount',
        'storageSize' => 'storageSize',
        'tableCount' => 'tableCount',
        'transactionalCount' => 'transactionalCount',
        'viewCount' => 'viewCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogCount) {
            $res['catalogCount'] = $this->catalogCount;
        }

        if (null !== $this->componentId) {
            $res['componentId'] = $this->componentId;
        }

        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->dsName) {
            $res['dsName'] = $this->dsName;
        }

        if (null !== $this->dsVersion) {
            $res['dsVersion'] = $this->dsVersion;
        }

        if (null !== $this->etTableCount) {
            $res['etTableCount'] = $this->etTableCount;
        }

        if (null !== $this->funcCount) {
            $res['funcCount'] = $this->funcCount;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->lastModified) {
            $res['lastModified'] = $this->lastModified;
        }

        if (null !== $this->noPtTableCount) {
            $res['noPtTableCount'] = $this->noPtTableCount;
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

        if (null !== $this->transactionalCount) {
            $res['transactionalCount'] = $this->transactionalCount;
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
        if (isset($map['catalogCount'])) {
            $model->catalogCount = $map['catalogCount'];
        }

        if (isset($map['componentId'])) {
            $model->componentId = $map['componentId'];
        }

        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['dsName'])) {
            $model->dsName = $map['dsName'];
        }

        if (isset($map['dsVersion'])) {
            $model->dsVersion = $map['dsVersion'];
        }

        if (isset($map['etTableCount'])) {
            $model->etTableCount = $map['etTableCount'];
        }

        if (isset($map['funcCount'])) {
            $model->funcCount = $map['funcCount'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['lastModified'])) {
            $model->lastModified = $map['lastModified'];
        }

        if (isset($map['noPtTableCount'])) {
            $model->noPtTableCount = $map['noPtTableCount'];
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

        if (isset($map['transactionalCount'])) {
            $model->transactionalCount = $map['transactionalCount'];
        }

        if (isset($map['viewCount'])) {
            $model->viewCount = $map['viewCount'];
        }

        return $model;
    }
}
