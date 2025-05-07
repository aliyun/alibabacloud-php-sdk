<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Buss\V20220822\Models;

use AlibabaCloud\Dara\Model;

class RiskEventSyncRequest extends Model
{
    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var int
     */
    public $discoveryTime;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $eventNumber;

    /**
     * @var string
     */
    public $relevanceBu;

    /**
     * @var string
     */
    public $riskDetail;

    /**
     * @var string
     */
    public $riskEffectType;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $submitter;
    protected $_name = [
        'deleted' => 'Deleted',
        'discoveryTime' => 'DiscoveryTime',
        'eventName' => 'EventName',
        'eventNumber' => 'EventNumber',
        'relevanceBu' => 'RelevanceBu',
        'riskDetail' => 'RiskDetail',
        'riskEffectType' => 'RiskEffectType',
        'riskLevel' => 'RiskLevel',
        'riskType' => 'RiskType',
        'source' => 'Source',
        'submitter' => 'Submitter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->discoveryTime) {
            $res['DiscoveryTime'] = $this->discoveryTime;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->eventNumber) {
            $res['EventNumber'] = $this->eventNumber;
        }

        if (null !== $this->relevanceBu) {
            $res['RelevanceBu'] = $this->relevanceBu;
        }

        if (null !== $this->riskDetail) {
            $res['RiskDetail'] = $this->riskDetail;
        }

        if (null !== $this->riskEffectType) {
            $res['RiskEffectType'] = $this->riskEffectType;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->submitter) {
            $res['Submitter'] = $this->submitter;
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
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['DiscoveryTime'])) {
            $model->discoveryTime = $map['DiscoveryTime'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['EventNumber'])) {
            $model->eventNumber = $map['EventNumber'];
        }

        if (isset($map['RelevanceBu'])) {
            $model->relevanceBu = $map['RelevanceBu'];
        }

        if (isset($map['RiskDetail'])) {
            $model->riskDetail = $map['RiskDetail'];
        }

        if (isset($map['RiskEffectType'])) {
            $model->riskEffectType = $map['RiskEffectType'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Submitter'])) {
            $model->submitter = $map['Submitter'];
        }

        return $model;
    }
}
