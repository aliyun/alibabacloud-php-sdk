<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\extra\DBInstanceIds;

class extra extends Model
{
    /**
     * @var string
     */
    public $accountSecurityPolicy;
    /**
     * @var DBInstanceIds
     */
    public $DBInstanceIds;
    /**
     * @var string
     */
    public $recoveryModel;
    protected $_name = [
        'accountSecurityPolicy' => 'AccountSecurityPolicy',
        'DBInstanceIds'         => 'DBInstanceIds',
        'recoveryModel'         => 'RecoveryModel',
    ];

    public function validate()
    {
        if (null !== $this->DBInstanceIds) {
            $this->DBInstanceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountSecurityPolicy) {
            $res['AccountSecurityPolicy'] = $this->accountSecurityPolicy;
        }

        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = null !== $this->DBInstanceIds ? $this->DBInstanceIds->toArray($noStream) : $this->DBInstanceIds;
        }

        if (null !== $this->recoveryModel) {
            $res['RecoveryModel'] = $this->recoveryModel;
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
        if (isset($map['AccountSecurityPolicy'])) {
            $model->accountSecurityPolicy = $map['AccountSecurityPolicy'];
        }

        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = DBInstanceIds::fromMap($map['DBInstanceIds']);
        }

        if (isset($map['RecoveryModel'])) {
            $model->recoveryModel = $map['RecoveryModel'];
        }

        return $model;
    }
}
