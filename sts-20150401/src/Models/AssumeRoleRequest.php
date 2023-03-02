<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models;

use AlibabaCloud\Tea\Model;

class AssumeRoleRequest extends Model
{
    /**
     * @description The validity period of the STS token. Unit: seconds.
     *
     * You can call the CreateRole or UpdateRole operation to configure the `MaxSessionDuration` parameter. For more information, see [CreateRole](~~28710~~) or [UpdateRole](~~28712~~).
     * @example 3600
     *
     * @var int
     */
    public $durationSeconds;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @description The policy that specifies the permissions of the returned STS token. You can use this parameter to grant the STS token fewer permissions than the permissions granted to the RAM role.
     *
     *   If you specify this parameter, the permissions of the returned STS token are the permissions that are included in the value of this parameter and owned by the RAM role.
     *   If you do not specify this parameter, the returned STS token has all the permissions of the RAM role.
     *
     * The value must be 1 to 2,048 characters in length.
     * @example {"Statement": [{"Action": ["*"],"Effect": "Allow","Resource": ["*"]}],"Version":"1"}
     *
     * @var string
     */
    public $policy;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role.
     *
     * You can view the ARN in the RAM console or by calling operations.
     *
     *   For more information about how to view the ARN in the RAM console, see [How do I find the ARN of the RAM role?](~~39744~~)
     *   For more information about how to view the ARN by calling operations, see [ListRoles](~~28713~~) or [GetRole](~~28711~~).
     *
     * @example acs:ram::123456789012****:role/adminrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description The custom name of the role session.
     *
     * The value must be 2 to 64 characters in length and can contain letters, digits, periods (.), at signs (@), hyphens (-), and underscores (\_).
     * @example alice
     *
     * @var string
     */
    public $roleSessionName;
    protected $_name = [
        'durationSeconds' => 'DurationSeconds',
        'externalId'      => 'ExternalId',
        'policy'          => 'Policy',
        'roleArn'         => 'RoleArn',
        'roleSessionName' => 'RoleSessionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->roleSessionName) {
            $res['RoleSessionName'] = $this->roleSessionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssumeRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['RoleSessionName'])) {
            $model->roleSessionName = $map['RoleSessionName'];
        }

        return $model;
    }
}
