<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class resourceGroups extends Model
{
    /**
     * @description The ID of the management account or member of the resource directory.
     *
     * @example 1394339739****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The time when the resource group was created.
     *
     * @example 2021-06-30T09:20:08Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The display name of the resource group.
     *
     * @example group1
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmzawhxxc****
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
     * @description The status of the resource group. Valid values:
     *
     *   Creating: The resource group is being created.
     *   OK: The resource group is created.
     *   PendingDelete: The resource group is waiting to be deleted.
     *
     * @example OK
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'   => 'AccountId',
        'createDate'  => 'CreateDate',
        'displayName' => 'DisplayName',
        'id'          => 'Id',
        'name'        => 'Name',
        'status'      => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroups
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
