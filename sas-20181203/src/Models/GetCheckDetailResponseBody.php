<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\assistInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\customConfigs;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\description;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\solution;

class GetCheckDetailResponseBody extends Model
{
    /**
     * @var assistInfo
     */
    public $assistInfo;

    /**
     * @var customConfigs[]
     */
    public $customConfigs;

    /**
     * @var description
     */
    public $description;

    /**
     * @var string
     */
    public $repairReset;

    /**
     * @var repairSetting
     */
    public $repairSetting;

    /**
     * @var int
     */
    public $repairSupportType;

    /**
     * @var string
     */
    public $requestId;

    /**
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

    public function validate()
    {
        if (null !== $this->assistInfo) {
            $this->assistInfo->validate();
        }
        if (\is_array($this->customConfigs)) {
            Model::validateArray($this->customConfigs);
        }
        if (null !== $this->description) {
            $this->description->validate();
        }
        if (null !== $this->repairSetting) {
            $this->repairSetting->validate();
        }
        if (null !== $this->solution) {
            $this->solution->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistInfo) {
            $res['AssistInfo'] = null !== $this->assistInfo ? $this->assistInfo->toArray($noStream) : $this->assistInfo;
        }

        if (null !== $this->customConfigs) {
            if (\is_array($this->customConfigs)) {
                $res['CustomConfigs'] = [];
                $n1 = 0;
                foreach ($this->customConfigs as $item1) {
                    $res['CustomConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = null !== $this->description ? $this->description->toArray($noStream) : $this->description;
        }

        if (null !== $this->repairReset) {
            $res['RepairReset'] = $this->repairReset;
        }

        if (null !== $this->repairSetting) {
            $res['RepairSetting'] = null !== $this->repairSetting ? $this->repairSetting->toArray($noStream) : $this->repairSetting;
        }

        if (null !== $this->repairSupportType) {
            $res['RepairSupportType'] = $this->repairSupportType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->solution) {
            $res['Solution'] = null !== $this->solution ? $this->solution->toArray($noStream) : $this->solution;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssistInfo'])) {
            $model->assistInfo = assistInfo::fromMap($map['AssistInfo']);
        }

        if (isset($map['CustomConfigs'])) {
            if (!empty($map['CustomConfigs'])) {
                $model->customConfigs = [];
                $n1 = 0;
                foreach ($map['CustomConfigs'] as $item1) {
                    $model->customConfigs[$n1] = customConfigs::fromMap($item1);
                    ++$n1;
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
