<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class BatchExecuteStatementShrinkRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $parameterSetsShrink;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @example acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****
     *
     * @var string
     */
    public $secretArn;

    /**
     * @example insert into users(name) values(:name)
     *
     * @var string
     */
    public $sql;

    /**
     * @example 8609****-94e1-45ce-8e25-354e3dd8****
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'database'            => 'Database',
        'parameterSetsShrink' => 'ParameterSets',
        'resourceArn'         => 'ResourceArn',
        'secretArn'           => 'SecretArn',
        'sql'                 => 'Sql',
        'transactionId'       => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->parameterSetsShrink) {
            $res['ParameterSets'] = $this->parameterSetsShrink;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchExecuteStatementShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['ParameterSets'])) {
            $model->parameterSetsShrink = $map['ParameterSets'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
