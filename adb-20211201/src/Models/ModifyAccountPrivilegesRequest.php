<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\ModifyAccountPrivilegesRequest\accountPrivileges;
use AlibabaCloud\Tea\Model;

class ModifyAccountPrivilegesRequest extends Model
{
    /**
     * @description The name of the database account.
     *
     * @example account1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The permissions of the database account.
     *
     * @var accountPrivileges[]
     */
    public $accountPrivileges;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * @example amv-bp1k5p066e1a****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The region ID of the cluster.
     *
     * @example cn-hangzhou
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPrivileges) {
            $res['AccountPrivileges'] = [];
            if (null !== $this->accountPrivileges && \is_array($this->accountPrivileges)) {
                $n = 0;
                foreach ($this->accountPrivileges as $item) {
                    $res['AccountPrivileges'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ModifyAccountPrivilegesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPrivileges'])) {
            if (!empty($map['AccountPrivileges'])) {
                $model->accountPrivileges = [];
                $n                        = 0;
                foreach ($map['AccountPrivileges'] as $item) {
                    $model->accountPrivileges[$n++] = null !== $item ? accountPrivileges::fromMap($item) : $item;
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
