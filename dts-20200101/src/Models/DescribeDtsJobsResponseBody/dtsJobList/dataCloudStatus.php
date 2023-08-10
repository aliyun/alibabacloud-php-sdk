<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList;

use AlibabaCloud\Tea\Model;

class dataCloudStatus extends Model
{
    /**
     * @description The error message returned if the task failed.
     *
     * @example framework: DTS-31009: In process of processing data ****
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the instance needs to be upgraded. Valid values:
     *
     * - **true**
     * - **false**
     * @example false
     *
     * @var bool
     */
    public $needUpgrade;

    /**
     * @description The progress of the task. Unit: percentage.
     *
     * @example 85
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of tables that have been migrated.
     *
     * @example 1
     *
     * @var string
     */
    public $progress;

    /**
     * @description The state of the task. For more information about the valid values, see the description of the request parameter **Status**.
     *
     * @example Migrating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'needUpgrade'  => 'NeedUpgrade',
        'percent'      => 'Percent',
        'progress'     => 'Progress',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->needUpgrade) {
            $res['NeedUpgrade'] = $this->needUpgrade;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCloudStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['NeedUpgrade'])) {
            $model->needUpgrade = $map['NeedUpgrade'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
