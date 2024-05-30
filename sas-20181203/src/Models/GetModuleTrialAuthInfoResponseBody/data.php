<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleTrialAuthInfoResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetModuleTrialAuthInfoResponseBody\data\trialRecordList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the user is qualified for the trial use. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $canTry;

    /**
     * @description The module code. Valid values:
     *
     *   **vulFix**: vulnerability fixing
     *   **cloudSiem**: threat analysis
     *
     * @example vulFix
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description The information about the trial use.
     *
     * @var trialRecordList[]
     */
    public $trialRecordList;
    protected $_name = [
        'canTry'          => 'CanTry',
        'moduleCode'      => 'ModuleCode',
        'trialRecordList' => 'TrialRecordList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canTry) {
            $res['CanTry'] = $this->canTry;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->trialRecordList) {
            $res['TrialRecordList'] = [];
            if (null !== $this->trialRecordList && \is_array($this->trialRecordList)) {
                $n = 0;
                foreach ($this->trialRecordList as $item) {
                    $res['TrialRecordList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['CanTry'])) {
            $model->canTry = $map['CanTry'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['TrialRecordList'])) {
            if (!empty($map['TrialRecordList'])) {
                $model->trialRecordList = [];
                $n                      = 0;
                foreach ($map['TrialRecordList'] as $item) {
                    $model->trialRecordList[$n++] = null !== $item ? trialRecordList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
