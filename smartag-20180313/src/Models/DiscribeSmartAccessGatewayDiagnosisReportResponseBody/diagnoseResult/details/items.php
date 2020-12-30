<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details\items\CN;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details\items\EN;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var CN
     */
    public $CN;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var EN
     */
    public $EN;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'type'      => 'Type',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
        'CN'        => 'CN',
        'itemName'  => 'ItemName',
        'EN'        => 'EN',
        'level'     => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->CN) {
            $res['CN'] = null !== $this->CN ? $this->CN->toMap() : null;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->EN) {
            $res['EN'] = null !== $this->EN ? $this->EN->toMap() : null;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['CN'])) {
            $model->CN = CN::fromMap($map['CN']);
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['EN'])) {
            $model->EN = EN::fromMap($map['EN']);
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
