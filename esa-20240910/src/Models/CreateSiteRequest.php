<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteRequest extends Model
{
    /**
     * @description The DNS setup. Valid values:
     *
     *   **NS**
     *   **CNAME**
     *
     * This parameter is required.
     * @example NS
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The service location. Valid values:
     *
     *   **domestic**: the Chinese mainland
     *   **global**: global
     *   **overseas**: outside the Chinese mainland
     *
     * This parameter is required.
     * @example domestic
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The instance ID, which can be obtained by calling the [ListUserRatePlanInstances](https://help.aliyun.com/document_detail/2852398.html) operation. Specify at least one of the instance ID and website ID. If you specify both of them, the instance ID is used.
     *
     * This parameter is required.
     * @example dbaudit-cn-nwy349jdb03
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the resource group. If you leave this parameter empty, the system uses the default resource group ID.
     *
     * @example rg-acfmw4znnok****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The website name.
     *
     * This parameter is required.
     * @example CreateSite
     *
     * @var string
     */
    public $siteName;
    protected $_name = [
        'accessType'      => 'AccessType',
        'coverage'        => 'Coverage',
        'instanceId'      => 'InstanceId',
        'resourceGroupId' => 'ResourceGroupId',
        'siteName'        => 'SiteName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}
