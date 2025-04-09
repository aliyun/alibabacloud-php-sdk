<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyAccountAuthorityRequest\dmlAuthSetting;

class ModifyAccountAuthorityRequest extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var dmlAuthSetting
     */
    public $dmlAuthSetting;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'account' => 'Account',
        'DBInstanceId' => 'DBInstanceId',
        'dmlAuthSetting' => 'DmlAuthSetting',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->dmlAuthSetting) {
            $this->dmlAuthSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->dmlAuthSetting) {
            $res['DmlAuthSetting'] = null !== $this->dmlAuthSetting ? $this->dmlAuthSetting->toArray($noStream) : $this->dmlAuthSetting;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
