<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetTenantCheckAvailableResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The timestamp when you can submit a quick scan task.
     *
     * @example 1725530005357
     *
     * @var int
     */
    public $nextScanTime;

    /**
     * @description The status of the quick scan task. Enumerated values:
     *
     *   0: You can submit a quick scan task.
     *   1: The current task is not complete. You cannot submit a quick scan task.
     *   2: The free quota for this week is exhausted. You must wait for the next free scan period.
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'nextScanTime' => 'NextScanTime',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextScanTime) {
            $res['NextScanTime'] = $this->nextScanTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['NextScanTime'])) {
            $model->nextScanTime = $map['NextScanTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
