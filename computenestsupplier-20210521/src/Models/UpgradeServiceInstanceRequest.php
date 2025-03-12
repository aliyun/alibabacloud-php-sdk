<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class UpgradeServiceInstanceRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run for the request to check information such as the permissions and instance status. Valid values:
     *
     *   true: performs a dry run for the request, but does not create a service instance.
     *   false: performs a dry run for the request, and creates a service instance if the request passes the dry run.
     *
     * @example false
     *
     * @var string
     */
    public $dryRun;

    /**
     * @description The configuration parameters of the service instance.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the service instance.
     *
     * @example si-5cbae874da0e47xxxxxx
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The service version.
     *
     * @example 2
     *
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'clientToken'       => 'ClientToken',
        'dryRun'            => 'DryRun',
        'parameters'        => 'Parameters',
        'regionId'          => 'RegionId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceVersion'    => 'ServiceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeServiceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
