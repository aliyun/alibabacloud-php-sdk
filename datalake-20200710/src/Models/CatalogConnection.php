<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CatalogConnection extends Model
{
    /**
     * @var string
     */
    public $jdbcPassword;

    /**
     * @var string
     */
    public $jdbcUri;

    /**
     * @var string
     */
    public $jdbcUserName;

    /**
     * @var string
     */
    public $thriftUri;

    /**
     * @example CONN-607A0053D874****
     *
     * @var string
     */
    public $vpcConnectionId;
    protected $_name = [
        'jdbcPassword'    => 'JdbcPassword',
        'jdbcUri'         => 'JdbcUri',
        'jdbcUserName'    => 'JdbcUserName',
        'thriftUri'       => 'ThriftUri',
        'vpcConnectionId' => 'VpcConnectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jdbcPassword) {
            $res['JdbcPassword'] = $this->jdbcPassword;
        }
        if (null !== $this->jdbcUri) {
            $res['JdbcUri'] = $this->jdbcUri;
        }
        if (null !== $this->jdbcUserName) {
            $res['JdbcUserName'] = $this->jdbcUserName;
        }
        if (null !== $this->thriftUri) {
            $res['ThriftUri'] = $this->thriftUri;
        }
        if (null !== $this->vpcConnectionId) {
            $res['VpcConnectionId'] = $this->vpcConnectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CatalogConnection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JdbcPassword'])) {
            $model->jdbcPassword = $map['JdbcPassword'];
        }
        if (isset($map['JdbcUri'])) {
            $model->jdbcUri = $map['JdbcUri'];
        }
        if (isset($map['JdbcUserName'])) {
            $model->jdbcUserName = $map['JdbcUserName'];
        }
        if (isset($map['ThriftUri'])) {
            $model->thriftUri = $map['ThriftUri'];
        }
        if (isset($map['VpcConnectionId'])) {
            $model->vpcConnectionId = $map['VpcConnectionId'];
        }

        return $model;
    }
}
