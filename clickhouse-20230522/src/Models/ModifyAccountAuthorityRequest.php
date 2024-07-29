<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityRequest\dmlAuthSetting;
use AlibabaCloud\Tea\Model;

class ModifyAccountAuthorityRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test1
     *
     * @var string
     */
    public $account;

    /**
     * @description This parameter is required.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @var dmlAuthSetting
     */
    public $dmlAuthSetting;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'account'        => 'Account',
        'DBInstanceId'   => 'DBInstanceId',
        'dmlAuthSetting' => 'DmlAuthSetting',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->dmlAuthSetting) {
            $res['DmlAuthSetting'] = null !== $this->dmlAuthSetting ? $this->dmlAuthSetting->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountAuthorityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DmlAuthSetting'])) {
            $model->dmlAuthSetting = dmlAuthSetting::fromMap($map['DmlAuthSetting']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
