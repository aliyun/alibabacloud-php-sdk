<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeAndroidInstancesRequest extends Model
{
    /**
     * @description The IDs of the instances.
     *
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @description The name of the instance.
     *
     * @example name
     *
     * @var string
     */
    public $androidInstanceName;

    /**
     * @var string
     */
    public $appManagePolicyId;

    /**
     * @var string
     */
    public $authorizedUserId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/2807298.html) operation to query the regions where Cloud Phone is supported.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go.
     *   PrePaid: subscription.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the instance group.
     *
     * @example ag-25nt4kk9whjh****
     *
     * @var string
     */
    public $instanceGroupId;

    /**
     * @description The IDs of the instance groups.
     *
     * @var string[]
     */
    public $instanceGroupIds;

    /**
     * @description The name of the instance group.
     *
     * @example test
     *
     * @var string
     */
    public $instanceGroupName;

    /**
     * @description The ID of the bound key pair.
     *
     * @example kp-5hh431emkpuoi****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description The maximum number of entries per page. Valid values: 1 to 100. Default value: 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If the parameter is left empty, the data is queried from the first entry.
     *
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6kw9dGL5jves2FS9RLq****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the node.
     *
     * @example node_id
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example node_name
     *
     * @var string
     */
    public $nodeName;

    /**
     * @var string[]
     */
    public $officeSiteIds;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string[]
     */
    public $qosRuleIds;

    /**
     * @description The sales mode.
     *
     * Valid values:
     *
     *   Instance: the standard mode.
     *   Node: the node mode.
     *
     * @example Instance
     *
     * @var string
     */
    public $saleMode;

    /**
     * @description The state of the instance.
     *
     * Valid values:
     *
     *   BACKUPING: The instance is being backed up.
     *   STARTING: The instance is being started.
     *   RUNNING: The instance group is available.
     *   DELETING: The instance is being deleted.
     *   BACKUP_FAILED: The backup operation failed.
     *   DELETED: The instance is deleted.
     *   FAILED: The instance failed to be created.
     *   STOPPED: The instance is stopped.
     *   RECOVERING: The instance has an ongoing file recovery task.
     *   UNAVAILABLE: The instance has an exception.
     *   REBOOTING: The instance is being restarted.
     *   RESETTING: The instance is being reset.
     *   STOPPING: The instance is being stopped.
     *   RECOVER_FAILED: The file recovery task failed.
     *   CREATING: The instance is being created.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the resources.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'androidInstanceName' => 'AndroidInstanceName',
        'appManagePolicyId' => 'AppManagePolicyId',
        'authorizedUserId' => 'AuthorizedUserId',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'instanceGroupId' => 'InstanceGroupId',
        'instanceGroupIds' => 'InstanceGroupIds',
        'instanceGroupName' => 'InstanceGroupName',
        'keyPairId' => 'KeyPairId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'officeSiteIds' => 'OfficeSiteIds',
        'privateIpAddress' => 'PrivateIpAddress',
        'qosRuleIds' => 'QosRuleIds',
        'saleMode' => 'SaleMode',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
        }
        if (null !== $this->appManagePolicyId) {
            $res['AppManagePolicyId'] = $this->appManagePolicyId;
        }
        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }
        if (null !== $this->instanceGroupIds) {
            $res['InstanceGroupIds'] = $this->instanceGroupIds;
        }
        if (null !== $this->instanceGroupName) {
            $res['InstanceGroupName'] = $this->instanceGroupName;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->officeSiteIds) {
            $res['OfficeSiteIds'] = $this->officeSiteIds;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->qosRuleIds) {
            $res['QosRuleIds'] = $this->qosRuleIds;
        }
        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAndroidInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['AndroidInstanceName'])) {
            $model->androidInstanceName = $map['AndroidInstanceName'];
        }
        if (isset($map['AppManagePolicyId'])) {
            $model->appManagePolicyId = $map['AppManagePolicyId'];
        }
        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }
        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = $map['InstanceGroupIds'];
            }
        }
        if (isset($map['InstanceGroupName'])) {
            $model->instanceGroupName = $map['InstanceGroupName'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['OfficeSiteIds'])) {
            if (!empty($map['OfficeSiteIds'])) {
                $model->officeSiteIds = $map['OfficeSiteIds'];
            }
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['QosRuleIds'])) {
            if (!empty($map['QosRuleIds'])) {
                $model->qosRuleIds = $map['QosRuleIds'];
            }
        }
        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
