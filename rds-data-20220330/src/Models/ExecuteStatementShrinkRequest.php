<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class ExecuteStatementShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $continueAfterTimeout;

    /**
     * @example test
     *
     * @var string
     */
    public $database;

    /**
     * @example JSON
     *
     * @var string
     */
    public $formatRecordsAs;

    /**
     * @example true
     *
     * @var bool
     */
    public $includeResultMetadata;

    /**
     * @var string
     */
    public $parametersShrink;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var string
     */
    public $resultSetOptionsShrink;

    /**
     * @example acs:rds-api:cn-hangzhou:1266348003******:rds-db-credentials/mySecret-Uy****
     *
     * @var string
     */
    public $secretArn;

    /**
     * @example select * from users
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
        'continueAfterTimeout'   => 'ContinueAfterTimeout',
        'database'               => 'Database',
        'formatRecordsAs'        => 'FormatRecordsAs',
        'includeResultMetadata'  => 'IncludeResultMetadata',
        'parametersShrink'       => 'Parameters',
        'resourceArn'            => 'ResourceArn',
        'resultSetOptionsShrink' => 'ResultSetOptions',
        'secretArn'              => 'SecretArn',
        'sql'                    => 'Sql',
        'transactionId'          => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->continueAfterTimeout) {
            $res['ContinueAfterTimeout'] = $this->continueAfterTimeout;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->formatRecordsAs) {
            $res['FormatRecordsAs'] = $this->formatRecordsAs;
        }
        if (null !== $this->includeResultMetadata) {
            $res['IncludeResultMetadata'] = $this->includeResultMetadata;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->resultSetOptionsShrink) {
            $res['ResultSetOptions'] = $this->resultSetOptionsShrink;
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
     * @return ExecuteStatementShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContinueAfterTimeout'])) {
            $model->continueAfterTimeout = $map['ContinueAfterTimeout'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['FormatRecordsAs'])) {
            $model->formatRecordsAs = $map['FormatRecordsAs'];
        }
        if (isset($map['IncludeResultMetadata'])) {
            $model->includeResultMetadata = $map['IncludeResultMetadata'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['ResultSetOptions'])) {
            $model->resultSetOptionsShrink = $map['ResultSetOptions'];
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
