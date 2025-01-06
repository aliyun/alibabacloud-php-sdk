<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\CreateFlowlogRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateFlowlogRequest extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * This parameter is required.
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not set this parameter, ClientToken is set to the value of RequestId. The value of RequestId for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the flow log.
     *
     * The description is optional. If you enter a description, it must be 1 to 256 characters in length, and cannot start with http:// or https://.
     * @example myFlowlog
     *
     * @var string
     */
    public $description;

    /**
     * @description The flow log name.
     *
     * The name can be empty or 1 to 128 characters in length, and cannot start with http:// or https://.
     * @example myFlowlog
     *
     * @var string
     */
    public $flowLogName;

    /**
     * @description The time window for collecting log data. Unit: seconds. Valid values: **60** and **600**. Default value: **600**.
     *
     * @example 600
     *
     * @var int
     */
    public $interval;

    /**
     * @description The strings that define the fields in the flow log.
     *
     * Format: `${Field 1}${Field 2}${Field 3}...{Field n}`
     *
     *   If you do not configure this parameter, all fields are included in the flow log.
     *   If you configure this parameter, start the string with `${srcaddr}${dstaddr}${bytes}` because `${srcaddr}${dstaddr}${bytes}` are required variables. For more information about the fields supported by flow logs, see [Configure a flow log](https://help.aliyun.com/document_detail/339822.html).
     *
     * @example ${srcaddr}${dstaddr}${bytes}
     *
     * @var string
     */
    public $logFormatString;

    /**
     * @description The Logstore that stores the captured traffic data.
     *
     *   If a Logstore is already created in the selected region, enter the name of the Logstore.
     *
     *   If no Logstores are created in the selected region, enter a name and the system automatically creates a Logstore. The name of the Logstore. The name must meet the following requirements:
     *
     *   The name must be unique in a project.
     *   The name can contain only lowercase letters, digits, hyphens (-), and underscores (_).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length,
     *
     * This parameter is required.
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
     * @description The project that stores the captured traffic data.
     *
     *   If a project is already created in the selected region, enter the name of the project.
     *
     *   If no projects are created in the selected region, enter a name and the system automatically creates a project.
     *
     * The project name must be unique in a region. You cannot change the name after the project is created. The name must meet the following requirements:
     *
     *   The name must be globally unique.
     *   The name can contain only lowercase letters, digits, and hyphens (-).
     *   The name must start and end with a lowercase letter or a digit.
     *   The name must be 3 to 63 characters in length,
     *
     * This parameter is required.
     * @example FlowLogProject
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the region where the flow log is deployed.
     *
     * This parameter is required.
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
     * @description The tags.
     *
     * You can specify at most 20 tags.
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the VPC connection, VPN connection, VBR connection, ECR connection, or inter-region connection.
     *
     * If you create the flow log for a transfer router, skip this parameter.
     * @example tr-attach-r6g0m3epjehw57****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the transit router.
     *
     * @example tr-bp1rmwxnk221e3fas****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'cenId'                     => 'CenId',
        'clientToken'               => 'ClientToken',
        'description'               => 'Description',
        'flowLogName'               => 'FlowLogName',
        'interval'                  => 'Interval',
        'logFormatString'           => 'LogFormatString',
        'logStoreName'              => 'LogStoreName',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'projectName'               => 'ProjectName',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'tag'                       => 'Tag',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterId'           => 'TransitRouterId',
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
        if (null !== $this->flowLogName) {
            $res['FlowLogName'] = $this->flowLogName;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->logFormatString) {
            $res['LogFormatString'] = $this->logFormatString;
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
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowlogRequest
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
        if (isset($map['FlowLogName'])) {
            $model->flowLogName = $map['FlowLogName'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['LogFormatString'])) {
            $model->logFormatString = $map['LogFormatString'];
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
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
