<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\ModifyAccountPrivilegeRequest\dbPrivilege;

class ModifyAccountPrivilegeRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var dbPrivilege[]
     */
    public $dbPrivilege;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accountName' => 'AccountName',
        'dbPrivilege' => 'DbPrivilege',
        'drdsInstanceId' => 'DrdsInstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->dbPrivilege)) {
            Model::validateArray($this->dbPrivilege);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->dbPrivilege) {
            if (\is_array($this->dbPrivilege)) {
                $res['DbPrivilege'] = [];
                $n1 = 0;
                foreach ($this->dbPrivilege as $item1) {
                    $res['DbPrivilege'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['DbPrivilege'])) {
            if (!empty($map['DbPrivilege'])) {
                $model->dbPrivilege = [];
                $n1 = 0;
                foreach ($map['DbPrivilege'] as $item1) {
                    $model->dbPrivilege[$n1] = dbPrivilege::fromMap($item1);
                    ++$n1;
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
