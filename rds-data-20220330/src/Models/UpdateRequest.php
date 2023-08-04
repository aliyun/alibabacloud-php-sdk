<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class UpdateRequest extends Model
{
    /**
     * @example photoview
     *
     * @var string
     */
    public $database;

    /**
     * @var Selector[]
     */
    public $filter;

    /**
     * @var mixed[]
     */
    public $record;

    /**
     * @example acs:rds:cn-hangzhou:1484143351265396:dbinstance/rm-bp1b8h01q6t19p8s6
     *
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
     * @example users
     *
     * @var string
     */
    public $table;

    /**
     * @example 8609****-94e1-45ce-8e25-354e3dd8****
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'database'      => 'Database',
        'filter'        => 'Filter',
        'record'        => 'Record',
        'resourceArn'   => 'ResourceArn',
        'secretArn'     => 'SecretArn',
        'table'         => 'Table',
        'transactionId' => 'TransactionId',
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
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                foreach ($this->filter as $key => $val) {
                    $res['Filter'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
