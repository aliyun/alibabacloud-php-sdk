<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetricDetailsResponseBody;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetricDetailsResponseBody\resources\resourceProperties;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description 合规状态。取值：
     * - PendingInclusion：已取消忽略未生效。
     * @example NonCompliant
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The check results further analyzed by auxiliary decision-making.
     *
     * >  This parameter is returned only when the check item supports the auxiliary decision-making feature.
     * @example RecentUnloginRamUser
     *
     * @var string
     */
    public $resourceClassification;

    /**
     * @description The resource ID.
     *
     * @example 26435103783237****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource.
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The ID of the Alibaba Cloud account that owns the resource.
     *
     * @example 176618589410****
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The attributes of the resource.
     *
     * @var resourceProperties[]
     */
    public $resourceProperties;

    /**
     * @description The type of the resource.
     *
     * @example ACS::RAM::User
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'complianceType'         => 'ComplianceType',
        'regionId'               => 'RegionId',
        'resourceClassification' => 'ResourceClassification',
        'resourceId'             => 'ResourceId',
        'resourceName'           => 'ResourceName',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'resourceProperties'     => 'ResourceProperties',
        'resourceType'           => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceClassification) {
            $res['ResourceClassification'] = $this->resourceClassification;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceProperties) {
            $res['ResourceProperties'] = [];
            if (null !== $this->resourceProperties && \is_array($this->resourceProperties)) {
                $n = 0;
                foreach ($this->resourceProperties as $item) {
                    $res['ResourceProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceClassification'])) {
            $model->resourceClassification = $map['ResourceClassification'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceProperties'])) {
            if (!empty($map['ResourceProperties'])) {
                $model->resourceProperties = [];
                $n                         = 0;
                foreach ($map['ResourceProperties'] as $item) {
                    $model->resourceProperties[$n++] = null !== $item ? resourceProperties::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
