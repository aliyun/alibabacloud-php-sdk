<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationClientSecretsResponseBody;

use AlibabaCloud\Tea\Model;

class applicationClientSecrets extends Model
{
    /**
     * @description The ID of the application that you want to query.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The client ID of the application.
     *
     * @example app_mkv7rgt4d7i4u7zqtzev2mxxxx
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The client key secret of the application. The value is not masked.
     *
     * @example eyJh*****************************************************************************************************OQ
     *
     * @var string
     */
    public $clientSecret;

    /**
     * @description The ID of the instance.
     *
     * @example idaas_wdziy4vnjt33ehhf7z2o2nxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the client key was last used. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1649830226000
     *
     * @var int
     */
    public $lastUsedTime;

    /**
     * @description The client key ID of the application.
     *
     * @example sci_k52x2ru63rlkflina5utgkxxxx
     *
     * @var string
     */
    public $secretId;

    /**
     * @description The status of the client key. Valid values:
     *
     *   Enabled: The client key is enabled.
     *   Disabled: The client key is disabled.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'clientId'      => 'ClientId',
        'clientSecret'  => 'ClientSecret',
        'instanceId'    => 'InstanceId',
        'lastUsedTime'  => 'LastUsedTime',
        'secretId'      => 'SecretId',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lastUsedTime) {
            $res['LastUsedTime'] = $this->lastUsedTime;
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationClientSecrets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LastUsedTime'])) {
            $model->lastUsedTime = $map['LastUsedTime'];
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
