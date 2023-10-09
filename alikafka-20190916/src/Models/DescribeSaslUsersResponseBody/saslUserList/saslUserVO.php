<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponseBody\saslUserList;

use AlibabaCloud\Tea\Model;

class saslUserVO extends Model
{
    /**
     * @description The password that is used to access the Elasticsearch cluster.
     *
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @description The request type. Valid values:
     *
     *   **plain**: a simple mechanism that uses usernames and passwords to verify user identities. Message Queue for Apache Kafka provides an optimized PLAIN mechanism that allows you to dynamically create SASL users for an instance without the need to restart the instance.
     *   **scram**: a mechanism that uses usernames and passwords to verify user identities. This mechanism provides better security protection than the PLAIN mechanism. Message Queue for Apache Kafka uses SCRAM-SHA-256.
     *
     * Default value: **plain**.
     * @example scram
     *
     * @var string
     */
    public $type;

    /**
     * @description The name of the user.
     *
     * @example test12***
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'password' => 'Password',
        'type'     => 'Type',
        'username' => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saslUserVO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
