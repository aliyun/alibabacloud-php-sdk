<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponseBody\resourceGroup\regionStatuses;
use AlibabaCloud\Tea\Model;

class resourceGroup extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the resource group belongs.
     *
     * @example 123456789****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The time when the resource group was created. The time is displayed in UTC.
     *
     * @example 2015-01-23T12:33:18Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The display name of the resource group.
     *
     * @example my-project
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-9gLOoK****
     *
     * @var string
     */
    public $id;

    /**
     * @description The unique identifier of the resource group.
     *
     * @example my-project
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the resource group in all regions.
     *
     * @var regionStatuses
     */
    public $regionStatuses;

    /**
     * @description The status of the resource group. Valid values:
     *
     *   Creating: The resource group is being created.
     *   OK: The resource group is created.
     *   PendingDelete: The resource group is waiting to be deleted.
     *
     * @example PendingDelete
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'      => 'AccountId',
        'createDate'     => 'CreateDate',
        'displayName'    => 'DisplayName',
        'id'             => 'Id',
        'name'           => 'Name',
        'regionStatuses' => 'RegionStatuses',
        'status'         => 'Status',
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
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionStatuses) {
            $res['RegionStatuses'] = null !== $this->regionStatuses ? $this->regionStatuses->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionStatuses'])) {
            $model->regionStatuses = regionStatuses::fromMap($map['RegionStatuses']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
