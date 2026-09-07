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
     * @var string[]
     */
    public $promqlInsertPrivileges;

    /**
     * @var float
     */
    public $promqlSelectNodePercentage;

    /**
     * @var string[]
     */
    public $promqlSelectPrivileges;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountPrivileges' => 'AccountPrivileges',
        'DBClusterId' => 'DBClusterId',
        'promqlInsertPrivileges' => 'PromqlInsertPrivileges',
        'promqlSelectNodePercentage' => 'PromqlSelectNodePercentage',
        'promqlSelectPrivileges' => 'PromqlSelectPrivileges',
        'regionId' => 'RegionId',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->accountPrivileges)) {
            Model::validateArray($this->accountPrivileges);
        }
        if (\is_array($this->promqlInsertPrivileges)) {
            Model::validateArray($this->promqlInsertPrivileges);
        }
        if (\is_array($this->promqlSelectPrivileges)) {
            Model::validateArray($this->promqlSelectPrivileges);
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
                $n1 = 0;
                foreach ($this->accountPrivileges as $item1) {
                    $res['AccountPrivileges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->promqlInsertPrivileges) {
            if (\is_array($this->promqlInsertPrivileges)) {
                $res['PromqlInsertPrivileges'] = [];
                $n1 = 0;
                foreach ($this->promqlInsertPrivileges as $item1) {
                    $res['PromqlInsertPrivileges'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->promqlSelectNodePercentage) {
            $res['PromqlSelectNodePercentage'] = $this->promqlSelectNodePercentage;
        }

        if (null !== $this->promqlSelectPrivileges) {
            if (\is_array($this->promqlSelectPrivileges)) {
                $res['PromqlSelectPrivileges'] = [];
                $n1 = 0;
                foreach ($this->promqlSelectPrivileges as $item1) {
                    $res['PromqlSelectPrivileges'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
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
                $n1 = 0;
                foreach ($map['AccountPrivileges'] as $item1) {
                    $model->accountPrivileges[$n1] = accountPrivileges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['PromqlInsertPrivileges'])) {
            if (!empty($map['PromqlInsertPrivileges'])) {
                $model->promqlInsertPrivileges = [];
                $n1 = 0;
                foreach ($map['PromqlInsertPrivileges'] as $item1) {
                    $model->promqlInsertPrivileges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PromqlSelectNodePercentage'])) {
            $model->promqlSelectNodePercentage = $map['PromqlSelectNodePercentage'];
        }

        if (isset($map['PromqlSelectPrivileges'])) {
            if (!empty($map['PromqlSelectPrivileges'])) {
                $model->promqlSelectPrivileges = [];
                $n1 = 0;
                foreach ($map['PromqlSelectPrivileges'] as $item1) {
                    $model->promqlSelectPrivileges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
