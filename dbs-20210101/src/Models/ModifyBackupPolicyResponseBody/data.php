<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyResponseBody;

use AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyResponseBody\data\advanceDataPolicies;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var advanceDataPolicies[]
     */
    public $advanceDataPolicies;

    /**
     * @example 17:00Z-18:00Z
     *
     * @var string
     */
    public $preferredBackupWindow;

    /**
     * @example 17:00Z
     *
     * @var string
     */
    public $preferredBackupWindowBegin;
    protected $_name = [
        'advanceDataPolicies'        => 'AdvanceDataPolicies',
        'preferredBackupWindow'      => 'PreferredBackupWindow',
        'preferredBackupWindowBegin' => 'PreferredBackupWindowBegin',
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
        if (null !== $this->preferredBackupWindow) {
            $res['PreferredBackupWindow'] = $this->preferredBackupWindow;
        }
        if (null !== $this->preferredBackupWindowBegin) {
            $res['PreferredBackupWindowBegin'] = $this->preferredBackupWindowBegin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['PreferredBackupWindow'])) {
            $model->preferredBackupWindow = $map['PreferredBackupWindow'];
        }
        if (isset($map['PreferredBackupWindowBegin'])) {
            $model->preferredBackupWindowBegin = $map['PreferredBackupWindowBegin'];
        }

        return $model;
    }
}
