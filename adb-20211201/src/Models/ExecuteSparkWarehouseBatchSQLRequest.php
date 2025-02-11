<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ExecuteSparkWarehouseBatchSQLRequest extends Model
{
    /**
     * @var string
     */
    public $agency;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var int
     */
    public $executeResultLimit;
    /**
     * @var int
     */
    public $executeTimeLimitInSeconds;
    /**
     * @var string
     */
    public $query;
    /**
     * @var string
     */
    public $resourceGroupName;
    /**
     * @var string
     */
    public $runtimeConfig;
    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'agency'                    => 'Agency',
        'DBClusterId'               => 'DBClusterId',
        'executeResultLimit'        => 'ExecuteResultLimit',
        'executeTimeLimitInSeconds' => 'ExecuteTimeLimitInSeconds',
        'query'                     => 'Query',
        'resourceGroupName'         => 'ResourceGroupName',
        'runtimeConfig'             => 'RuntimeConfig',
        'schema'                    => 'Schema',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agency) {
            $res['Agency'] = $this->agency;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->executeResultLimit) {
            $res['ExecuteResultLimit'] = $this->executeResultLimit;
        }

        if (null !== $this->executeTimeLimitInSeconds) {
            $res['ExecuteTimeLimitInSeconds'] = $this->executeTimeLimitInSeconds;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->runtimeConfig) {
            $res['RuntimeConfig'] = $this->runtimeConfig;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
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
        if (isset($map['Agency'])) {
            $model->agency = $map['Agency'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ExecuteResultLimit'])) {
            $model->executeResultLimit = $map['ExecuteResultLimit'];
        }

        if (isset($map['ExecuteTimeLimitInSeconds'])) {
            $model->executeTimeLimitInSeconds = $map['ExecuteTimeLimitInSeconds'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['RuntimeConfig'])) {
            $model->runtimeConfig = $map['RuntimeConfig'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}
