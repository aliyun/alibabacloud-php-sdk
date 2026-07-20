<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetResourceControlEventResponseBody\data\applyRecordList;

class data extends Model
{
    /**
     * @var applyRecordList[]
     */
    public $applyRecordList;

    /**
     * @var string
     */
    public $assistantTip;

    /**
     * @var string
     */
    public $blockIp;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $dstIp;

    /**
     * @var string
     */
    public $dstPort;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventImpact;

    /**
     * @var string
     */
    public $leakName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $punishReason;

    /**
     * @var string
     */
    public $snapshotUrl;

    /**
     * @var string
     */
    public $srcIp;

    /**
     * @var string
     */
    public $srcPort;

    /**
     * @var string
     */
    public $tip;
    protected $_name = [
        'applyRecordList' => 'ApplyRecordList',
        'assistantTip' => 'AssistantTip',
        'blockIp' => 'BlockIp',
        'direction' => 'Direction',
        'dstIp' => 'DstIp',
        'dstPort' => 'DstPort',
        'eventId' => 'EventId',
        'eventImpact' => 'EventImpact',
        'leakName' => 'LeakName',
        'protocol' => 'Protocol',
        'punishReason' => 'PunishReason',
        'snapshotUrl' => 'SnapshotUrl',
        'srcIp' => 'SrcIp',
        'srcPort' => 'SrcPort',
        'tip' => 'Tip',
    ];

    public function validate()
    {
        if (\is_array($this->applyRecordList)) {
            Model::validateArray($this->applyRecordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyRecordList) {
            if (\is_array($this->applyRecordList)) {
                $res['ApplyRecordList'] = [];
                $n1 = 0;
                foreach ($this->applyRecordList as $item1) {
                    $res['ApplyRecordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->assistantTip) {
            $res['AssistantTip'] = $this->assistantTip;
        }

        if (null !== $this->blockIp) {
            $res['BlockIp'] = $this->blockIp;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }

        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventImpact) {
            $res['EventImpact'] = $this->eventImpact;
        }

        if (null !== $this->leakName) {
            $res['LeakName'] = $this->leakName;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->punishReason) {
            $res['PunishReason'] = $this->punishReason;
        }

        if (null !== $this->snapshotUrl) {
            $res['SnapshotUrl'] = $this->snapshotUrl;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->srcPort) {
            $res['SrcPort'] = $this->srcPort;
        }

        if (null !== $this->tip) {
            $res['Tip'] = $this->tip;
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
        if (isset($map['ApplyRecordList'])) {
            if (!empty($map['ApplyRecordList'])) {
                $model->applyRecordList = [];
                $n1 = 0;
                foreach ($map['ApplyRecordList'] as $item1) {
                    $model->applyRecordList[$n1] = applyRecordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AssistantTip'])) {
            $model->assistantTip = $map['AssistantTip'];
        }

        if (isset($map['BlockIp'])) {
            $model->blockIp = $map['BlockIp'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }

        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventImpact'])) {
            $model->eventImpact = $map['EventImpact'];
        }

        if (isset($map['LeakName'])) {
            $model->leakName = $map['LeakName'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['PunishReason'])) {
            $model->punishReason = $map['PunishReason'];
        }

        if (isset($map['SnapshotUrl'])) {
            $model->snapshotUrl = $map['SnapshotUrl'];
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['SrcPort'])) {
            $model->srcPort = $map['SrcPort'];
        }

        if (isset($map['Tip'])) {
            $model->tip = $map['Tip'];
        }

        return $model;
    }
}
