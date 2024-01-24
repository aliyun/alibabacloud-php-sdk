<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountPrivilegeRequest\dbPrivilege;
use AlibabaCloud\Tea\Model;

class ModifyAccountPrivilegeRequest extends Model
{
    /**
     * @description The username of the account that you want to modify.
     *
     * @example account_sec
     *
     * @var string
     */
    public $accountName;

    /**
     * @var dbPrivilege[]
     */
    public $dbPrivilege;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drdshbgaen89****
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The ID of the region in which the PolarDB-X 1.0 instance is located.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountName'    => 'AccountName',
        'dbPrivilege'    => 'DbPrivilege',
        'drdsInstanceId' => 'DrdsInstanceId',
        'regionId'       => 'RegionId',
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
        if (null !== $this->dbPrivilege) {
            $res['DbPrivilege'] = [];
            if (null !== $this->dbPrivilege && \is_array($this->dbPrivilege)) {
                $n = 0;
                foreach ($this->dbPrivilege as $item) {
                    $res['DbPrivilege'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountPrivilegeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DbPrivilege'])) {
            if (!empty($map['DbPrivilege'])) {
                $model->dbPrivilege = [];
                $n                  = 0;
                foreach ($map['DbPrivilege'] as $item) {
                    $model->dbPrivilege[$n++] = null !== $item ? dbPrivilege::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
