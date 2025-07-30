<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob;

use AlibabaCloud\Tea\Model;

class structureInitializationStatus extends Model
{
    /**
     * @description Error message indicating task failure.
     *
     * @example DTS-070211: Connect Source DB failed. cause by ****
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Whether to display upgrade specifications, return value:
     * - True: Yes.
     * - False: No.
     *
     * @example true
     *
     * @var bool
     */
    public $needUpgrade;

    /**
     * @description Initialization progress of library table structure, measured in percentage.
     *
     * @example 100
     *
     * @var string
     */
    public $percent;

    /**
     * @description The number of tables that have completed library table structure initialization.
     *
     * @example 1
     *
     * @var string
     */
    public $progress;

    /**
     * @description The initialization status of the library table structure includes:
     * - NotStarted: Not started.
     * - Migration: In the process of initialization.
     * - Failed: Initialization failed.
     * - Finished: Initialization completed.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'needUpgrade' => 'NeedUpgrade',
        'percent' => 'Percent',
        'progress' => 'Progress',
        'status' => 'Status',
    ];

    public function validate() {}

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
     * @return structureInitializationStatus
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
