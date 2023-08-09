<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInvocationResultsRequest extends Model
{
    /**
     * @description The execution results.
     *
     * @example c-hz0jdfwcsr****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The number of entries to return on each page.
     *
     * Default value: 10.
     * @example PlainText
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The information about the tag.
     *
     * @example false
     *
     * @var bool
     */
    public $includeHistory;

    /**
     * @description The page number of the returned page.
     *
     * @example i-bp1i7gg30r52z2em****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the command execution.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The page number of the page to return.
     *
     * Default value: 1.
     * @example Running
     *
     * @var string
     */
    public $invokeRecordStatus;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the command.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the container.
     *
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of entries returned per page.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the user who ran the command on the instance.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The error code returned when the command cannot be sent or run. Valid values:
     *
     *   If this parameter is empty, the command is run normally.
     *   InstanceNotExists: The specified instance does not exist is released.
     *   InstanceReleased: The instance was released while the command was being run on the instance.
     *   InstanceNotRunning: The instance is not in the Running state while the command is being run.
     *   CommandNotApplicable: The command is not applicable to the specified instance.
     *   AccountNotExists: The specified account does not exist.
     *   DirectoryNotExists: The specified directory does not exist.
     *   BadCronExpression: The cron expression used to specify the execution time is invalid.
     *   ClientNotRunning: The Cloud Assistant client is not running.
     *   ClientNotResponse: The Cloud Assistant client is not responding.
     *   ClientIsUpgrading: The Cloud Assistant client is being upgraded.
     *   ClientNeedUpgrade: The Cloud Assistant client needs to be upgraded.
     *   DeliveryTimeout: The request to send the command timed out.
     *   ExecutionTimeout: The command execution timed out.
     *   ExecutionException: An exception occurred while the command was being run.
     *   ExecutionInterrupted: The execution was interrupted.
     *   ExitCodeNonzero: The command execution is complete, but the exit code is not 0.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'commandId'            => 'CommandId',
        'contentEncoding'      => 'ContentEncoding',
        'includeHistory'       => 'IncludeHistory',
        'instanceId'           => 'InstanceId',
        'invokeId'             => 'InvokeId',
        'invokeRecordStatus'   => 'InvokeRecordStatus',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tag'                  => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->includeHistory) {
            $res['IncludeHistory'] = $this->includeHistory;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeRecordStatus) {
            $res['InvokeRecordStatus'] = $this->invokeRecordStatus;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['IncludeHistory'])) {
            $model->includeHistory = $map['IncludeHistory'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeRecordStatus'])) {
            $model->invokeRecordStatus = $map['InvokeRecordStatus'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
