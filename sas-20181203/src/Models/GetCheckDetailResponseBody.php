<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\assistInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\customConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\description;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\solution;
use AlibabaCloud\Tea\Model;

class GetCheckDetailResponseBody extends Model
{
    /**
     * @description The help information about the check item.
     *
     * @var assistInfo
     */
    public $assistInfo;

    /**
     * @description The custom configuration items of the check item.
     *
     * @var customConfigs[]
     */
    public $customConfigs;

    /**
     * @description The description of the check item.
     *
     * @var description
     */
    public $description;

    /**
     * @description >  This parameter is deprecated.
     *
     * @example true
     *
     * @deprecated
     *
     * @var string
     */
    public $repairReset;

    /**
     * @description The fixing parameter configurations of the check item.
     *
     * @var repairSetting
     */
    public $repairSetting;

    /**
     * @description >  This parameter is deprecated.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $repairSupportType;

    /**
     * @description The request ID.
     *
     * @example 15A6ED6A-DBFE-5255-A248-289907809BEC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The solution to handle the risk item.
     *
     * @var solution
     */
    public $solution;
    protected $_name = [
        'assistInfo' => 'AssistInfo',
        'customConfigs' => 'CustomConfigs',
        'description' => 'Description',
        'repairReset' => 'RepairReset',
        'repairSetting' => 'RepairSetting',
        'repairSupportType' => 'RepairSupportType',
        'requestId' => 'RequestId',
        'solution' => 'Solution',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistInfo) {
            $res['AssistInfo'] = null !== $this->assistInfo ? $this->assistInfo->toMap() : null;
        }
        if (null !== $this->customConfigs) {
            $res['CustomConfigs'] = [];
            if (null !== $this->customConfigs && \is_array($this->customConfigs)) {
                $n = 0;
                foreach ($this->customConfigs as $item) {
                    $res['CustomConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = null !== $this->description ? $this->description->toMap() : null;
        }
        if (null !== $this->repairReset) {
            $res['RepairReset'] = $this->repairReset;
        }
        if (null !== $this->repairSetting) {
            $res['RepairSetting'] = null !== $this->repairSetting ? $this->repairSetting->toMap() : null;
        }
        if (null !== $this->repairSupportType) {
            $res['RepairSupportType'] = $this->repairSupportType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->solution) {
            $res['Solution'] = null !== $this->solution ? $this->solution->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssistInfo'])) {
            $model->assistInfo = assistInfo::fromMap($map['AssistInfo']);
        }
        if (isset($map['CustomConfigs'])) {
            if (!empty($map['CustomConfigs'])) {
                $model->customConfigs = [];
                $n = 0;
                foreach ($map['CustomConfigs'] as $item) {
                    $model->customConfigs[$n++] = null !== $item ? customConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = description::fromMap($map['Description']);
        }
        if (isset($map['RepairReset'])) {
            $model->repairReset = $map['RepairReset'];
        }
        if (isset($map['RepairSetting'])) {
            $model->repairSetting = repairSetting::fromMap($map['RepairSetting']);
        }
        if (isset($map['RepairSupportType'])) {
            $model->repairSupportType = $map['RepairSupportType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Solution'])) {
            $model->solution = solution::fromMap($map['Solution']);
        }

        return $model;
    }
}
