<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeFlowlogsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeFlowlogsRequest extends Model
{
    /**
     * @description The name of the Logstore where the flow log is stored.
     *
     * The name must be 3 to 63 characters in length, and can contain lowercase letters, digits, underscores (\_), and hyphens (-). It must start or end with a lowercase letter or a digit.
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The name of the flow log.
     *
     * The name must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (\_), and hyphens (-). The name must start with a letter but cannot start with `http://` or `https://`.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the project where the flow log is stored.
     *
     * The name must be 3 to 63 characters in length, and can contain lowercase letters, digits, and hyphens (-). It must start or end with a lowercase letter or a digit.
     * @example myFlowlog
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * @example flowlog-m5evbtbpt****
     *
     * @var string
     */
    public $flowLogId;

    /**
     * @description The description of the flow log.
     *
     * The description must be 2 to 256 characters in length. It must start with a letter but cannot start with `http://` or `https://`.
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example FlowLogStore
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The information about the tags.
     *
     * You can specify at most 20 tags in each call.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The tag key.
     *
     * You can specify at most 20 tag keys.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the flow log. Valid values:
     *
     *   **Active**: The flow log is enabled.
     *   **Inactive**: The flow log is disabled.
     *
     * @example FlowLogProject
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the flow log.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The number of entries to return on each page. Minimum value: **1**. Default value: **20**.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag value.
     *
     * Each tag key must have a unique tag value. You can specify at most 20 tag values in each call.
     * @var tag[]
     */
    public $tag;

    /**
     * @description The number of entries returned per page.
     *
     * @example tr-attach-qieks13jnt1cchy***
     *
     * @var string
     */
    public $transitRouterAttachmentId;
    protected $_name = [
        'cenId'                     => 'CenId',
        'clientToken'               => 'ClientToken',
        'description'               => 'Description',
        'flowLogId'                 => 'FlowLogId',
        'flowLogName'               => 'FlowLogName',
        'logStoreName'              => 'LogStoreName',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'pageNumber'                => 'PageNumber',
        'pageSize'                  => 'PageSize',
        'projectName'               => 'ProjectName',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'status'                    => 'Status',
        'tag'                       => 'Tag',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowlogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }

        return $model;
    }
}
