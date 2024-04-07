<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class ExecuteOperationSyncRequest extends Model
{
    /**
     * @example BE68D71ZY5YYIU9R
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var mixed[]
     */
    public $attributes;

    /**
     * @example 1600765710019
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example rename
     *
     * @var string
     */
    public $operation;

    /**
     * @example rg-acfmyjt3c5om3hi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example dds
     *
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'applicationId'   => 'ApplicationId',
        'attributes'      => 'Attributes',
        'clientToken'     => 'ClientToken',
        'operation'       => 'Operation',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceType'     => 'ServiceType',
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
        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteOperationSyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
