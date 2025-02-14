<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListEiamInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $developerAPIPrivateDomain;
    /**
     * @var string
     */
    public $developerAPIPublicDomain;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceStatus;
    /**
     * @var string
     */
    public $instanceVersion;
    /**
     * @var string
     */
    public $openAPIPrivateDomain;
    /**
     * @var string
     */
    public $openAPIPublicDomain;
    /**
     * @var string
     */
    public $SSODomain;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'description'               => 'Description',
        'developerAPIPrivateDomain' => 'DeveloperAPIPrivateDomain',
        'developerAPIPublicDomain'  => 'DeveloperAPIPublicDomain',
        'instanceId'                => 'InstanceId',
        'instanceStatus'            => 'InstanceStatus',
        'instanceVersion'           => 'InstanceVersion',
        'openAPIPrivateDomain'      => 'OpenAPIPrivateDomain',
        'openAPIPublicDomain'       => 'OpenAPIPublicDomain',
        'SSODomain'                 => 'SSODomain',
        'startTime'                 => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->developerAPIPrivateDomain) {
            $res['DeveloperAPIPrivateDomain'] = $this->developerAPIPrivateDomain;
        }

        if (null !== $this->developerAPIPublicDomain) {
            $res['DeveloperAPIPublicDomain'] = $this->developerAPIPublicDomain;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->instanceVersion) {
            $res['InstanceVersion'] = $this->instanceVersion;
        }

        if (null !== $this->openAPIPrivateDomain) {
            $res['OpenAPIPrivateDomain'] = $this->openAPIPrivateDomain;
        }

        if (null !== $this->openAPIPublicDomain) {
            $res['OpenAPIPublicDomain'] = $this->openAPIPublicDomain;
        }

        if (null !== $this->SSODomain) {
            $res['SSODomain'] = $this->SSODomain;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DeveloperAPIPrivateDomain'])) {
            $model->developerAPIPrivateDomain = $map['DeveloperAPIPrivateDomain'];
        }

        if (isset($map['DeveloperAPIPublicDomain'])) {
            $model->developerAPIPublicDomain = $map['DeveloperAPIPublicDomain'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InstanceVersion'])) {
            $model->instanceVersion = $map['InstanceVersion'];
        }

        if (isset($map['OpenAPIPrivateDomain'])) {
            $model->openAPIPrivateDomain = $map['OpenAPIPrivateDomain'];
        }

        if (isset($map['OpenAPIPublicDomain'])) {
            $model->openAPIPublicDomain = $map['OpenAPIPublicDomain'];
        }

        if (isset($map['SSODomain'])) {
            $model->SSODomain = $map['SSODomain'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
