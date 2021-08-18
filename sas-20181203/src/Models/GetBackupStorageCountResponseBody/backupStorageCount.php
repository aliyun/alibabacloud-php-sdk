<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupStorageCountResponseBody;

use AlibabaCloud\Tea\Model;

class backupStorageCount extends Model
{
    /**
     * @var int
     */
    public $overflow;

    /**
     * @var int
     */
    public $uniUsageStorageByte;

    /**
     * @var int
     */
    public $buyStorageByte;

    /**
     * @var int
     */
    public $usageStorageByte;

    /**
     * @var int
     */
    public $ecsUsageStorageByte;
    protected $_name = [
        'overflow'            => 'Overflow',
        'uniUsageStorageByte' => 'UniUsageStorageByte',
        'buyStorageByte'      => 'BuyStorageByte',
        'usageStorageByte'    => 'UsageStorageByte',
        'ecsUsageStorageByte' => 'EcsUsageStorageByte',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overflow) {
            $res['Overflow'] = $this->overflow;
        }
        if (null !== $this->uniUsageStorageByte) {
            $res['UniUsageStorageByte'] = $this->uniUsageStorageByte;
        }
        if (null !== $this->buyStorageByte) {
            $res['BuyStorageByte'] = $this->buyStorageByte;
        }
        if (null !== $this->usageStorageByte) {
            $res['UsageStorageByte'] = $this->usageStorageByte;
        }
        if (null !== $this->ecsUsageStorageByte) {
            $res['EcsUsageStorageByte'] = $this->ecsUsageStorageByte;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupStorageCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Overflow'])) {
            $model->overflow = $map['Overflow'];
        }
        if (isset($map['UniUsageStorageByte'])) {
            $model->uniUsageStorageByte = $map['UniUsageStorageByte'];
        }
        if (isset($map['BuyStorageByte'])) {
            $model->buyStorageByte = $map['BuyStorageByte'];
        }
        if (isset($map['UsageStorageByte'])) {
            $model->usageStorageByte = $map['UsageStorageByte'];
        }
        if (isset($map['EcsUsageStorageByte'])) {
            $model->ecsUsageStorageByte = $map['EcsUsageStorageByte'];
        }

        return $model;
    }
}
