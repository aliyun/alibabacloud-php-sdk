<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePoliciesV2ResponseBody\policies\rules;

use AlibabaCloud\Tea\Model;

class retentionRules extends Model
{
    /**
     * @description The type of the special retention rule. Valid values:
     *
     *   **WEEKLY**: retains weekly backups
     *   **MONTHLY**: retains monthly backups
     *   **YEARLY**: retains yearly backups
     *
     * @example YEARLY
     *
     * @var string
     */
    public $advancedRetentionType;

    /**
     * @description The retention period of the backup data. Minimum value: 1. Unit: days.
     *
     * @example 730
     *
     * @var int
     */
    public $retention;

    /**
     * @description Indicates which backup is retained based on the special retention rule. Only the first backup can be retained.
     *
     * @example 1
     *
     * @var int
     */
    public $whichSnapshot;
    protected $_name = [
        'advancedRetentionType' => 'AdvancedRetentionType',
        'retention'             => 'Retention',
        'whichSnapshot'         => 'WhichSnapshot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedRetentionType) {
            $res['AdvancedRetentionType'] = $this->advancedRetentionType;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->whichSnapshot) {
            $res['WhichSnapshot'] = $this->whichSnapshot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return retentionRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedRetentionType'])) {
            $model->advancedRetentionType = $map['AdvancedRetentionType'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['WhichSnapshot'])) {
            $model->whichSnapshot = $map['WhichSnapshot'];
        }

        return $model;
    }
}
