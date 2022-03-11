<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobsResponseBody\dtsJobList\precheckStatus;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $checkItem;

    /**
     * @var string
     */
    public $checkItemDescription;

    /**
     * @var string
     */
    public $checkResult;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var string
     */
    public $repairMethod;
    protected $_name = [
        'checkItem'            => 'CheckItem',
        'checkItemDescription' => 'CheckItemDescription',
        'checkResult'          => 'CheckResult',
        'failedReason'         => 'FailedReason',
        'repairMethod'         => 'RepairMethod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }
        if (null !== $this->checkItemDescription) {
            $res['CheckItemDescription'] = $this->checkItemDescription;
        }
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->failedReason) {
            $res['FailedReason'] = $this->failedReason;
        }
        if (null !== $this->repairMethod) {
            $res['RepairMethod'] = $this->repairMethod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }
        if (isset($map['CheckItemDescription'])) {
            $model->checkItemDescription = $map['CheckItemDescription'];
        }
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['FailedReason'])) {
            $model->failedReason = $map['FailedReason'];
        }
        if (isset($map['RepairMethod'])) {
            $model->repairMethod = $map['RepairMethod'];
        }

        return $model;
    }
}
