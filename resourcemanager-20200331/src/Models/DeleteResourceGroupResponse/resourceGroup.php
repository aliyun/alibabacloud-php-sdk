<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponse;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponse\resourceGroup\regionStatuses;
use AlibabaCloud\Tea\Model;

class resourceGroup extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var regionStatuses
     */
    public $regionStatuses;
    protected $_name = [
        'id'             => 'Id',
        'name'           => 'Name',
        'displayName'    => 'DisplayName',
        'status'         => 'Status',
        'createDate'     => 'CreateDate',
        'accountId'      => 'AccountId',
        'regionStatuses' => 'RegionStatuses',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('displayName', $this->displayName, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('createDate', $this->createDate, true);
        Model::validateRequired('accountId', $this->accountId, true);
        Model::validateRequired('regionStatuses', $this->regionStatuses, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->regionStatuses) {
            $res['RegionStatuses'] = null !== $this->regionStatuses ? $this->regionStatuses->toMap() : null;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RegionStatuses'])) {
            $model->regionStatuses = regionStatuses::fromMap($map['RegionStatuses']);
        }

        return $model;
    }
}
