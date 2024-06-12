<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceRequest extends Model
{
    /**
     * @var int
     */
    public $complianceOption;

    /**
     * @description The ID of the region in which the resource resides.
     *
     * For more information about how to query the region ID of a resource, see [ListDiscoveredResources](https://help.aliyun.com/document_detail/411702.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The resource IDs.
     *
     * This parameter is required.
     * @example new-bucket
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * This parameter is required.
     * @example ACS::OSS::Bucket
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'complianceOption' => 'ComplianceOption',
        'region'           => 'Region',
        'resourceId'       => 'ResourceId',
        'resourceType'     => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceOption) {
            $res['ComplianceOption'] = $this->complianceOption;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiscoveredResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceOption'])) {
            $model->complianceOption = $map['ComplianceOption'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
