<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryTrafficControlTaskItemReportResponseBody;

use AlibabaCloud\Dara\Model;

class trafficControlTaskItemReports extends Model
{
    /**
     * @var int
     */
    public $actualItemControlNum;

    /**
     * @var int
     */
    public $actualItemControlTraffic;

    /**
     * @var int
     */
    public $doneItemControlNum;

    /**
     * @var string
     */
    public $doneItemControlPercentage;

    /**
     * @var string
     */
    public $itemControlNumPercentage;

    /**
     * @var string
     */
    public $itemControlTrafficPercentage;

    /**
     * @var int
     */
    public $oughtItemControlNum;

    /**
     * @var int
     */
    public $oughtItemControlTraffic;

    /**
     * @var string
     */
    public $trafficControlTargetId;

    /**
     * @var string
     */
    public $trafficControlTargetName;
    protected $_name = [
        'actualItemControlNum' => 'ActualItemControlNum',
        'actualItemControlTraffic' => 'ActualItemControlTraffic',
        'doneItemControlNum' => 'DoneItemControlNum',
        'doneItemControlPercentage' => 'DoneItemControlPercentage',
        'itemControlNumPercentage' => 'ItemControlNumPercentage',
        'itemControlTrafficPercentage' => 'ItemControlTrafficPercentage',
        'oughtItemControlNum' => 'OughtItemControlNum',
        'oughtItemControlTraffic' => 'OughtItemControlTraffic',
        'trafficControlTargetId' => 'TrafficControlTargetId',
        'trafficControlTargetName' => 'TrafficControlTargetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualItemControlNum) {
            $res['ActualItemControlNum'] = $this->actualItemControlNum;
        }

        if (null !== $this->actualItemControlTraffic) {
            $res['ActualItemControlTraffic'] = $this->actualItemControlTraffic;
        }

        if (null !== $this->doneItemControlNum) {
            $res['DoneItemControlNum'] = $this->doneItemControlNum;
        }

        if (null !== $this->doneItemControlPercentage) {
            $res['DoneItemControlPercentage'] = $this->doneItemControlPercentage;
        }

        if (null !== $this->itemControlNumPercentage) {
            $res['ItemControlNumPercentage'] = $this->itemControlNumPercentage;
        }

        if (null !== $this->itemControlTrafficPercentage) {
            $res['ItemControlTrafficPercentage'] = $this->itemControlTrafficPercentage;
        }

        if (null !== $this->oughtItemControlNum) {
            $res['OughtItemControlNum'] = $this->oughtItemControlNum;
        }

        if (null !== $this->oughtItemControlTraffic) {
            $res['OughtItemControlTraffic'] = $this->oughtItemControlTraffic;
        }

        if (null !== $this->trafficControlTargetId) {
            $res['TrafficControlTargetId'] = $this->trafficControlTargetId;
        }

        if (null !== $this->trafficControlTargetName) {
            $res['TrafficControlTargetName'] = $this->trafficControlTargetName;
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
        if (isset($map['ActualItemControlNum'])) {
            $model->actualItemControlNum = $map['ActualItemControlNum'];
        }

        if (isset($map['ActualItemControlTraffic'])) {
            $model->actualItemControlTraffic = $map['ActualItemControlTraffic'];
        }

        if (isset($map['DoneItemControlNum'])) {
            $model->doneItemControlNum = $map['DoneItemControlNum'];
        }

        if (isset($map['DoneItemControlPercentage'])) {
            $model->doneItemControlPercentage = $map['DoneItemControlPercentage'];
        }

        if (isset($map['ItemControlNumPercentage'])) {
            $model->itemControlNumPercentage = $map['ItemControlNumPercentage'];
        }

        if (isset($map['ItemControlTrafficPercentage'])) {
            $model->itemControlTrafficPercentage = $map['ItemControlTrafficPercentage'];
        }

        if (isset($map['OughtItemControlNum'])) {
            $model->oughtItemControlNum = $map['OughtItemControlNum'];
        }

        if (isset($map['OughtItemControlTraffic'])) {
            $model->oughtItemControlTraffic = $map['OughtItemControlTraffic'];
        }

        if (isset($map['TrafficControlTargetId'])) {
            $model->trafficControlTargetId = $map['TrafficControlTargetId'];
        }

        if (isset($map['TrafficControlTargetName'])) {
            $model->trafficControlTargetName = $map['TrafficControlTargetName'];
        }

        return $model;
    }
}
