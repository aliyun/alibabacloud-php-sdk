<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetBackupStorageCountResponseBody;

use AlibabaCloud\Tea\Model;

class backupStorageCount extends Model
{
    /**
     * @var int
     */
    public $buyStorageByte;

    /**
     * @var int
     */
    public $ecsUsageStorageByte;

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
    public $usageStorageByte;
    protected $_name = [
        'buyStorageByte'      => 'BuyStorageByte',
        'ecsUsageStorageByte' => 'EcsUsageStorageByte',
        'overflow'            => 'Overflow',
        'uniUsageStorageByte' => 'UniUsageStorageByte',
        'usageStorageByte'    => 'UsageStorageByte',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyStorageByte) {
            $res['BuyStorageByte'] = $this->buyStorageByte;
        }
        if (null !== $this->ecsUsageStorageByte) {
            $res['EcsUsageStorageByte'] = $this->ecsUsageStorageByte;
        }
        if (null !== $this->overflow) {
            $res['Overflow'] = $this->overflow;
        }
        if (null !== $this->uniUsageStorageByte) {
            $res['UniUsageStorageByte'] = $this->uniUsageStorageByte;
        }
        if (null !== $this->usageStorageByte) {
            $res['UsageStorageByte'] = $this->usageStorageByte;
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
        if (isset($map['BuyStorageByte'])) {
            $model->buyStorageByte = $map['BuyStorageByte'];
        }
        if (isset($map['EcsUsageStorageByte'])) {
            $model->ecsUsageStorageByte = $map['EcsUsageStorageByte'];
        }
        if (isset($map['Overflow'])) {
            $model->overflow = $map['Overflow'];
        }
        if (isset($map['UniUsageStorageByte'])) {
            $model->uniUsageStorageByte = $map['UniUsageStorageByte'];
        }
        if (isset($map['UsageStorageByte'])) {
            $model->usageStorageByte = $map['UsageStorageByte'];
        }

        return $model;
    }
}
