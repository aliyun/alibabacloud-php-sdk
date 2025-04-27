<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ListTablesRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $schema;

    /**
     * @var string
     */
    public $secretArn;

    /**
     * @var string
     */
    public $tablePattern;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'database' => 'Database',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'schema' => 'Schema',
        'secretArn' => 'SecretArn',
        'tablePattern' => 'TablePattern',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }

        if (null !== $this->tablePattern) {
            $res['TablePattern'] = $this->tablePattern;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }

        if (isset($map['TablePattern'])) {
            $model->tablePattern = $map['TablePattern'];
        }

        return $model;
    }
}
