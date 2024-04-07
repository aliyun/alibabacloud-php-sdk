<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class ValuateApplicationRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to ValuateApplication.
     *
     * @example 02S7UU41WKJL7ERR
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The ID of the resource group to which the application you want to query belongs.
     *
     * @example 1600765710019
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the application.
     *
     * @example rg-acfmyjt3c5om3hi
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'applicationId'   => 'ApplicationId',
        'clientToken'     => 'ClientToken',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValuateApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
