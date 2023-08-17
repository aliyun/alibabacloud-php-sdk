<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeProcessListRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example am-bp11q28kvl688****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The keyword in an SQL statement, which is used to filter queries. Set the value to **SELECT**.
     *
     * @example SELECT
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The order in which queries are sorted based on the specified fields. Specify this parameter as an ordered JSON array in the `[{"Field":"Time","Type":"Desc" },{ "Field":"User", "Type":"Asc" }]` format.
     *
     *   **Field** specifies the field used to sort queries. Valid values: Time, User, Host, and DB.
     *   **Type** specifies the sorting sequence. Valid values: **Desc** and **Asc**.
     *
     * @example [ { "Field":"Time","Type":"Desc" },  { "Field":"User", "Type":"Asc" }]
     *
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 30. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The execution duration used to filter queries. Queries that take a longer time than the specified execution duration are displayed. Unit: seconds.
     *
     * @example 5
     *
     * @var int
     */
    public $runningTime;

    /**
     * @description Specifies whether to show a complete SQL statement. Valid values:
     *
     *   **True**: shows a complete SQL statement.
     *   **False**: shows only the first 100 characters of an SQL statement.
     *
     * >  The default value is False.
     * @example True
     *
     * @var bool
     */
    public $showFull;

    /**
     * @description The name of the user used to filter queries.
     *
     * @example test
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'keyword'              => 'Keyword',
        'order'                => 'Order',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'runningTime'          => 'RunningTime',
        'showFull'             => 'ShowFull',
        'user'                 => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->showFull) {
            $res['ShowFull'] = $this->showFull;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProcessListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['ShowFull'])) {
            $model->showFull = $map['ShowFull'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
