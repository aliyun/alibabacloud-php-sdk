<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribePriceForCreateDesktopOversoldGroupRequest extends Model
{
    /**
     * @var int
     */
    public $concurrenceCount;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var int
     */
    public $oversoldUserCount;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'concurrenceCount'  => 'ConcurrenceCount',
        'dataDiskSize'      => 'DataDiskSize',
        'desktopType'       => 'DesktopType',
        'oversoldUserCount' => 'OversoldUserCount',
        'period'            => 'Period',
        'periodUnit'        => 'PeriodUnit',
        'systemDiskSize'    => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrenceCount) {
            $res['ConcurrenceCount'] = $this->concurrenceCount;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->oversoldUserCount) {
            $res['OversoldUserCount'] = $this->oversoldUserCount;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceForCreateDesktopOversoldGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrenceCount'])) {
            $model->concurrenceCount = $map['ConcurrenceCount'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['OversoldUserCount'])) {
            $model->oversoldUserCount = $map['OversoldUserCount'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
