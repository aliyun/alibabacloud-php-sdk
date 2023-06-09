<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class GetMultiAccountResourceConfigurationRequest extends Model
{
    /**
     * @description The ID of the management account or member of the resource directory.
     *
     * @example 1619302****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The ID of the resource.
     *
     * @example m-eb3hji****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The type of the resource.
     *
     * @example ACS::VPC::RouteTable
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'accountId'        => 'AccountId',
        'resourceId'       => 'ResourceId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType'     => 'ResourceType',
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultiAccountResourceConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
