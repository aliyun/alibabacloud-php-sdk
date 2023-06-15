<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSecretsResponseBody;

use AlibabaCloud\Tea\Model;

class secrets extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 1266348003******
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The description of the credential.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the credential for the created Data API account.
     *
     * @example acs:rds:cn-hangzhou:1335786***:dbInstance/rm-bp1m7l3j63****
     *
     * @var string
     */
    public $secretArn;

    /**
     * @description The name of the credential.
     *
     * @example Foo
     *
     * @var string
     */
    public $secretName;

    /**
     * @description The username that is used to access the database.
     *
     * @example user_jack
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'accountId'   => 'AccountId',
        'description' => 'Description',
        'regionId'    => 'RegionId',
        'secretArn'   => 'SecretArn',
        'secretName'  => 'SecretName',
        'username'    => 'Username',
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
