<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListInspectionTaskReportsResponseBody\inspectionTask;

use AlibabaCloud\Tea\Model;

class alarmStatistic extends Model
{
    /**
     * @example 21
     *
     * @var int
     */
    public $criticalNumber;

    /**
     * @example get_interface
     *
     * @var string
     */
    public $inspectionItem;

    /**
     * @example 5750
     *
     * @var string
     */
    public $model;

    /**
     * @example Ruijie
     *
     * @var string
     */
    public $vendor;

    /**
     * @example 12
     *
     * @var int
     */
    public $warningNumber;
    protected $_name = [
        'criticalNumber' => 'CriticalNumber',
        'inspectionItem' => 'InspectionItem',
        'model'          => 'Model',
        'vendor'         => 'Vendor',
        'warningNumber'  => 'WarningNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criticalNumber) {
            $res['CriticalNumber'] = $this->criticalNumber;
        }
        if (null !== $this->inspectionItem) {
            $res['InspectionItem'] = $this->inspectionItem;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->warningNumber) {
            $res['WarningNumber'] = $this->warningNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CriticalNumber'])) {
            $model->criticalNumber = $map['CriticalNumber'];
        }
        if (isset($map['InspectionItem'])) {
            $model->inspectionItem = $map['InspectionItem'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['WarningNumber'])) {
            $model->warningNumber = $map['WarningNumber'];
        }

        return $model;
    }
}
