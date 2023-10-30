<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostAccountsForUserRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example root
     *
     * @var string
     */
    public $hostAccountName;

    /**
     * @description The ID of the host for which the host accounts were queried.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The total number of host accounts returned.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the user for which you want to query authorized host accounts.
     *
     * >  You can call the [ListUsers](~~204522~~) operation to query the ID of the user ID.
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The name of the host account that you want to query. Exact match is supported.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The name of the host account.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The region ID of the Bastionhost instance where you want to query the host accounts that the user is authorized to manage on the host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'hostAccountName' => 'HostAccountName',
        'hostId'          => 'HostId',
        'instanceId'      => 'InstanceId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountName) {
            $res['HostAccountName'] = $this->hostAccountName;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostAccountsForUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccountName'])) {
            $model->hostAccountName = $map['HostAccountName'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
