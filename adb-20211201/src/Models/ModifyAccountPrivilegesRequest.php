<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest\accountPrivileges;

class ModifyAccountPrivilegesRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var accountPrivileges[]
     */
    public $accountPrivileges;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountName'       => 'AccountName',
        'accountPrivileges' => 'AccountPrivileges',
        'DBClusterId'       => 'DBClusterId',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->accountPrivileges)) {
            Model::validateArray($this->accountPrivileges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountPrivileges) {
            if (\is_array($this->accountPrivileges)) {
                $res['AccountPrivileges'] = [];
                $n1                       = 0;
                foreach ($this->accountPrivileges as $item1) {
                    $res['AccountPrivileges'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountPrivileges'])) {
            if (!empty($map['AccountPrivileges'])) {
                $model->accountPrivileges = [];
                $n1                       = 0;
                foreach ($map['AccountPrivileges'] as $item1) {
                    $model->accountPrivileges[$n1++] = accountPrivileges::fromMap($item1);
                }
            }
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
