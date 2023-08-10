<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\SummaryJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class progressSummaryDetails extends Model
{
    /**
     * @description The type of migrated or synchronized object. Valid values: **Table**, **Constraint**, **Index**, **View**, **Materialize View**, **Type**, **Synonym**, **Trigger**, **Function**, **Procedure**, **Package**, **Default**, **Rule**, **PlanGuide**, and **Sequence**.
     *
     * @example Table
     *
     * @var string
     */
    public $key;

    /**
     * @description The state of the data migration or data synchronization task. Valid values:
     *
     *   **0**: The task was complete.
     *   **1**: The task was waiting to start.
     *   **2**: The task was being initialized.
     *   **3**: The task was in progress.
     *   **4**: An error occurred.
     *   **5**: The task failed.
     *
     * @example 0
     *
     * @var int
     */
    public $state;

    /**
     * @description The total number of migrated or synchronized objects.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'key'        => 'Key',
        'state'      => 'State',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return progressSummaryDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
