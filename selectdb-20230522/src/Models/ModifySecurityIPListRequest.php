<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityIPListRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the whitelist. Default value: **Default**.
     *
     * This parameter is required.
     * @example default
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The mode in which you want to modify the whitelist. Valid values:
     *
     *   **0**: overwrites the IP addresses in the whitelist.
     *   **1**: adds IP addresses to the whitelist.
     *   **2**: removes IP addresses from the whitelist.
     *
     * This parameter is required.
     * @example 0
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The IP addresses in the whitelist of the instance. Separate multiple IP addresses with commas (,).
     *
     * This parameter is required.
     * @example 127.0.XX.XX,127.2.XX.XX
     *
     * @var string
     */
    public $securityIPList;
    protected $_name = [
        'DBInstanceId'    => 'DBInstanceId',
        'groupName'       => 'GroupName',
        'modifyMode'      => 'ModifyMode',
        'regionId'        => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityIPList'  => 'SecurityIPList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityIPListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        return $model;
    }
}
