<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyRequest\advanceDataPolicies;
use AlibabaCloud\Tea\Model;

class ModifyBackupPolicyRequest extends Model
{
    /**
     * @var advanceDataPolicies[]
     */
    public $advanceDataPolicies;

    /**
     * @example pc-2ze3nrr64c5****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 17:00Z
     *
     * @var string
     */
    public $preferredBackupWindowBegin;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionCode;
    protected $_name = [
        'advanceDataPolicies'        => 'AdvanceDataPolicies',
        'instanceName'               => 'InstanceName',
        'preferredBackupWindowBegin' => 'PreferredBackupWindowBegin',
        'regionCode'                 => 'RegionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanceDataPolicies) {
            $res['AdvanceDataPolicies'] = [];
            if (null !== $this->advanceDataPolicies && \is_array($this->advanceDataPolicies)) {
                $n = 0;
                foreach ($this->advanceDataPolicies as $item) {
                    $res['AdvanceDataPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->preferredBackupWindowBegin) {
            $res['PreferredBackupWindowBegin'] = $this->preferredBackupWindowBegin;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvanceDataPolicies'])) {
            if (!empty($map['AdvanceDataPolicies'])) {
                $model->advanceDataPolicies = [];
                $n                          = 0;
                foreach ($map['AdvanceDataPolicies'] as $item) {
                    $model->advanceDataPolicies[$n++] = null !== $item ? advanceDataPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PreferredBackupWindowBegin'])) {
            $model->preferredBackupWindowBegin = $map['PreferredBackupWindowBegin'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        return $model;
    }
}
