<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyImageFixCycleConfigRequest extends Model
{
    /**
     * @description The cycle of the scheduled fix. Unit: day.
     *
     * @example 7
     *
     * @var int
     */
    public $imageFixCycle;

    /**
     * @description Specifies whether to enable the schedule image fix.
     *
     *   **on**: enable
     *   **off**: disable
     *
     * @example on
     *
     * @var string
     */
    public $imageFixSwitch;

    /**
     * @description The range of the scheduled fix. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **type**: The type of the image. The value is fixed to repo.
     *   **target**: The content of the image. The value is in the format of Namespace/Image repository.
     *
     * @example {\"type\":\"repo\",\"target\":[\"cdp-uat/zentao\",\"qa-dac/yyuan9\",\"cafdms-qa/xxl-job-admin\"]}
     *
     * @var string
     */
    public $imageFixTarget;

    /**
     * @description The time range during which the image was modified. Unit: day.
     *
     * @example 30
     *
     * @var int
     */
    public $imageTimeRange;
    protected $_name = [
        'imageFixCycle'  => 'ImageFixCycle',
        'imageFixSwitch' => 'ImageFixSwitch',
        'imageFixTarget' => 'ImageFixTarget',
        'imageTimeRange' => 'ImageTimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageFixCycle) {
            $res['ImageFixCycle'] = $this->imageFixCycle;
        }
        if (null !== $this->imageFixSwitch) {
            $res['ImageFixSwitch'] = $this->imageFixSwitch;
        }
        if (null !== $this->imageFixTarget) {
            $res['ImageFixTarget'] = $this->imageFixTarget;
        }
        if (null !== $this->imageTimeRange) {
            $res['ImageTimeRange'] = $this->imageTimeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImageFixCycleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageFixCycle'])) {
            $model->imageFixCycle = $map['ImageFixCycle'];
        }
        if (isset($map['ImageFixSwitch'])) {
            $model->imageFixSwitch = $map['ImageFixSwitch'];
        }
        if (isset($map['ImageFixTarget'])) {
            $model->imageFixTarget = $map['ImageFixTarget'];
        }
        if (isset($map['ImageTimeRange'])) {
            $model->imageTimeRange = $map['ImageTimeRange'];
        }

        return $model;
    }
}
