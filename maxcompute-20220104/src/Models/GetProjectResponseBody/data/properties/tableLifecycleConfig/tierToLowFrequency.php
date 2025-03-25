<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\tableLifecycleConfig;

use AlibabaCloud\Tea\Model;

class tierToLowFrequency extends Model
{
    /**
     * @description The system triggers an automatic storage tier change N days after the last access time of data. N is specified by this parameter and corresponds to `LastAccessTime` that is configured for the table or partition.
     *
     * >  If LastAccessTime of a table or partition is left empty, the following rules are applied:
     *
     *   For tables or partitions that you created before October 1, 2023, 2023.10.01 00:00:00 in UTC+0 is considered as the last access time.
     *
     *   For tables or partitions that you created on or after October 1, 2023, if no data is accessed, the table or partition creation time is considered as the last access time.
     *
     * @example 30
     *
     * @var int
     */
    public $daysAfterLastAccessGreaterThan;

    /**
     * @description The system triggers an automatic storage tier change N days after the last modification time of data. N is specified by this parameter and corresponds to `LastModifiedTime` that is configured for the table or partition.
     *
     * @example 30
     *
     * @var int
     */
    public $daysAfterLastModificationGreaterThan;

    /**
     * @description The period after the previous storage tier change time.
     *
     * @example 1
     *
     * @var int
     */
    public $daysAfterLastTierModificationGreaterThan;
    protected $_name = [
        'daysAfterLastAccessGreaterThan' => 'DaysAfterLastAccessGreaterThan',
        'daysAfterLastModificationGreaterThan' => 'DaysAfterLastModificationGreaterThan',
        'daysAfterLastTierModificationGreaterThan' => 'DaysAfterLastTierModificationGreaterThan',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->daysAfterLastAccessGreaterThan) {
            $res['DaysAfterLastAccessGreaterThan'] = $this->daysAfterLastAccessGreaterThan;
        }
        if (null !== $this->daysAfterLastModificationGreaterThan) {
            $res['DaysAfterLastModificationGreaterThan'] = $this->daysAfterLastModificationGreaterThan;
        }
        if (null !== $this->daysAfterLastTierModificationGreaterThan) {
            $res['DaysAfterLastTierModificationGreaterThan'] = $this->daysAfterLastTierModificationGreaterThan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tierToLowFrequency
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaysAfterLastAccessGreaterThan'])) {
            $model->daysAfterLastAccessGreaterThan = $map['DaysAfterLastAccessGreaterThan'];
        }
        if (isset($map['DaysAfterLastModificationGreaterThan'])) {
            $model->daysAfterLastModificationGreaterThan = $map['DaysAfterLastModificationGreaterThan'];
        }
        if (isset($map['DaysAfterLastTierModificationGreaterThan'])) {
            $model->daysAfterLastTierModificationGreaterThan = $map['DaysAfterLastTierModificationGreaterThan'];
        }

        return $model;
    }
}
