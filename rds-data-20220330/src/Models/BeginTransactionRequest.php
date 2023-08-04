<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class BeginTransactionRequest extends Model
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
    public $resourceArn;

    /**
     * @example acs:rds:cn-hangzhou:1335786916******:rds-db-credent****\/zha***Test03-21****
     *
     * @var string
     */
    public $secretArn;
    protected $_name = [
        'database'    => 'Database',
        'resourceArn' => 'ResourceArn',
        'secretArn'   => 'SecretArn',
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
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BeginTransactionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }

        return $model;
    }
}
