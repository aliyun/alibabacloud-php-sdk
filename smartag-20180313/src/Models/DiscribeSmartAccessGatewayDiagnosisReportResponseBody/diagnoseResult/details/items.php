<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details\items\CN;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult\details\items\EN;

class items extends Model
{
    /**
     * @var CN
     */
    public $CN;

    /**
     * @var EN
     */
    public $EN;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'CN' => 'CN',
        'EN' => 'EN',
        'endTime' => 'EndTime',
        'itemName' => 'ItemName',
        'level' => 'Level',
        'startTime' => 'StartTime',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->CN) {
            $this->CN->validate();
        }
        if (null !== $this->EN) {
            $this->EN->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CN) {
            $res['CN'] = null !== $this->CN ? $this->CN->toArray($noStream) : $this->CN;
        }

        if (null !== $this->EN) {
            $res['EN'] = null !== $this->EN ? $this->EN->toArray($noStream) : $this->EN;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CN'])) {
            $model->CN = CN::fromMap($map['CN']);
        }

        if (isset($map['EN'])) {
            $model->EN = EN::fromMap($map['EN']);
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
