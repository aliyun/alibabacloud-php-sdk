<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListMetaProfilingResultUdfPageResponseBody;

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
    public $className;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dsType;

    /**
     * @var string
     */
    public $funcComment;

    /**
     * @var string
     */
    public $funcCrtTime;

    /**
     * @var string
     */
    public $funcId;

    /**
     * @var string
     */
    public $funcModTime;

    /**
     * @var string
     */
    public $funcName;

    /**
     * @var string
     */
    public $funcType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $resourceLocation;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'catalogName' => 'catalogName',
        'className' => 'className',
        'dbName' => 'dbName',
        'dsType' => 'dsType',
        'funcComment' => 'funcComment',
        'funcCrtTime' => 'funcCrtTime',
        'funcId' => 'funcId',
        'funcModTime' => 'funcModTime',
        'funcName' => 'funcName',
        'funcType' => 'funcType',
        'id' => 'id',
        'migrationStatus' => 'migrationStatus',
        'owner' => 'owner',
        'resourceLocation' => 'resourceLocation',
        'resourceType' => 'resourceType',
        'tenantId' => 'tenantId',
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

        if (null !== $this->className) {
            $res['className'] = $this->className;
        }

        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->dsType) {
            $res['dsType'] = $this->dsType;
        }

        if (null !== $this->funcComment) {
            $res['funcComment'] = $this->funcComment;
        }

        if (null !== $this->funcCrtTime) {
            $res['funcCrtTime'] = $this->funcCrtTime;
        }

        if (null !== $this->funcId) {
            $res['funcId'] = $this->funcId;
        }

        if (null !== $this->funcModTime) {
            $res['funcModTime'] = $this->funcModTime;
        }

        if (null !== $this->funcName) {
            $res['funcName'] = $this->funcName;
        }

        if (null !== $this->funcType) {
            $res['funcType'] = $this->funcType;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->migrationStatus) {
            $res['migrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->resourceLocation) {
            $res['resourceLocation'] = $this->resourceLocation;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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

        if (isset($map['className'])) {
            $model->className = $map['className'];
        }

        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['dsType'])) {
            $model->dsType = $map['dsType'];
        }

        if (isset($map['funcComment'])) {
            $model->funcComment = $map['funcComment'];
        }

        if (isset($map['funcCrtTime'])) {
            $model->funcCrtTime = $map['funcCrtTime'];
        }

        if (isset($map['funcId'])) {
            $model->funcId = $map['funcId'];
        }

        if (isset($map['funcModTime'])) {
            $model->funcModTime = $map['funcModTime'];
        }

        if (isset($map['funcName'])) {
            $model->funcName = $map['funcName'];
        }

        if (isset($map['funcType'])) {
            $model->funcType = $map['funcType'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['migrationStatus'])) {
            $model->migrationStatus = $map['migrationStatus'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['resourceLocation'])) {
            $model->resourceLocation = $map['resourceLocation'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
