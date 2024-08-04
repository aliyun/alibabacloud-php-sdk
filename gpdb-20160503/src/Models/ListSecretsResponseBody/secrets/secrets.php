<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListSecretsResponseBody\secrets;

use AlibabaCloud\Tea\Model;

class secrets extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1033***
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The instance ID.
     *
     * @example gp-bp14****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The description of the access credential.
     *
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the access credential for the created Data API account. Format: `acs:gpdb:{{region}}:{{accountId}}:secret/{{secretName}}-{{32 digits random string}`.
     *
     * @example acs:gpdb:cn-beijing:1033**:secret/testsecret-eG2AQGRIwQ0zFp4VA7mYL3uiCXTfDQbQ
     *
     * @var string
     */
    public $secretArn;

    /**
     * @description The name of the access credential.
     *
     * @example testsecret
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The name of the database account.
     *
     * @example testacc
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'accountId'    => 'AccountId',
        'DBInstanceId' => 'DBInstanceId',
        'description'  => 'Description',
        'regionId'     => 'RegionId',
        'secretArn'    => 'SecretArn',
        'secretName'   => 'SecretName',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secrets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
