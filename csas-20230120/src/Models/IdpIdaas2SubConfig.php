<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class IdpIdaas2SubConfig extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var string
     */
    public $eventAesKey;

    /**
     * @var string
     */
    public $eventLabel;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $publicKeyEndpoint;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $samlMetadata;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'eventAesKey' => 'EventAesKey',
        'eventLabel' => 'EventLabel',
        'instanceId' => 'InstanceId',
        'publicKeyEndpoint' => 'PublicKeyEndpoint',
        'region' => 'Region',
        'samlMetadata' => 'SamlMetadata',
    ];

    public function validate() {}

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
        if (null !== $this->eventAesKey) {
            $res['EventAesKey'] = $this->eventAesKey;
        }
        if (null !== $this->eventLabel) {
            $res['EventLabel'] = $this->eventLabel;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->publicKeyEndpoint) {
            $res['PublicKeyEndpoint'] = $this->publicKeyEndpoint;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->samlMetadata) {
            $res['SamlMetadata'] = $this->samlMetadata;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IdpIdaas2SubConfig
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
        if (isset($map['EventAesKey'])) {
            $model->eventAesKey = $map['EventAesKey'];
        }
        if (isset($map['EventLabel'])) {
            $model->eventLabel = $map['EventLabel'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PublicKeyEndpoint'])) {
            $model->publicKeyEndpoint = $map['PublicKeyEndpoint'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SamlMetadata'])) {
            $model->samlMetadata = $map['SamlMetadata'];
        }

        return $model;
    }
}
