<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\DeleteResourceGroupResponseBody\resourceGroup\regionStatuses;
use AlibabaCloud\Tea\Model;

class resourceGroup extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var regionStatuses
     */
    public $regionStatuses;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'displayName'    => 'DisplayName',
        'status'         => 'Status',
        'regionStatuses' => 'RegionStatuses',
        'accountId'      => 'AccountId',
        'name'           => 'Name',
        'createDate'     => 'CreateDate',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->regionStatuses) {
            $res['RegionStatuses'] = null !== $this->regionStatuses ? $this->regionStatuses->toMap() : null;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RegionStatuses'])) {
            $model->regionStatuses = regionStatuses::fromMap($map['RegionStatuses']);
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
