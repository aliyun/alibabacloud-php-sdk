<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\etlDemoList\reverseJob\precheckStatus\detail;
use AlibabaCloud\Tea\Model;

class precheckStatus extends Model
{
    /**
     * @description The result of each precheck item.
     *
     * @var detail[]
     */
    public $detail;

    /**
     * @description The error message returned if the precheck failed.
     *
     * @example CHECK__ERROR_SAME_OBJ
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The precheck progress. Unit: percentage.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The precheck state. Valid values:
     *
     * - **NotStarted**: The precheck is not started.
     * - **Suspending**: The precheck is paused.
     * - **Checking**: The precheck is in progress.
     * - **Failed**: The precheck failed.
     * - **Finished**: The precheck is complete.
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'detail'       => 'Detail',
        'errorMessage' => 'ErrorMessage',
        'percent'      => 'Percent',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return precheckStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
