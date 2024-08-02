<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponseBody\saslUserList;

use AlibabaCloud\Tea\Model;

class saslUserVO extends Model
{
    /**
     * @description The encryption method.
     *
     * >  This field is available only for serverless ApsaraMQ for Kafka V3 instances.
     * @example SCRAM-SHA-256
     *
     * @var string
     */
    public $mechanism;

    /**
     * @description The password.
     *
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @description The type of the SASL user. Valid values:
     *
     *   **plain**: a simple mechanism that uses usernames and passwords to verify user identities. ApsaraMQ for Kafka provides an improved PLAIN mechanism that allows you to dynamically add SASL users without the need to restart an instance.
     *   **SCRAM**: a mechanism that uses usernames and passwords to verify user identities. Compared with the PLAIN mechanism, this mechanism provides better security protection. ApsaraMQ for Kafka uses the SCRAM-SHA-256 algorithm.
     *   **LDAP**: This value is available only for the SASL users of ApsaraMQ for Confluent instances.
     *
     * Default value: **plain**.
     * @example scram
     *
     * @var string
     */
    public $type;

    /**
     * @description The username.
     *
     * @example test12***
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'mechanism' => 'Mechanism',
        'password'  => 'Password',
        'type'      => 'Type',
        'username'  => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mechanism) {
            $res['Mechanism'] = $this->mechanism;
        }
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
        if (isset($map['Mechanism'])) {
            $model->mechanism = $map['Mechanism'];
        }
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
