<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardFlowInfoResponseBody\cardFlowInfos;

use AlibabaCloud\Tea\Model;

class cardFlowInfo extends Model
{
    /**
     * @var string
     */
    public $validDate;

    /**
     * @var int
     */
    public $voiceUsed;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $flowUsed;

    /**
     * @var int
     */
    public $voiceTotal;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var int
     */
    public $smsUsed;

    /**
     * @var int
     */
    public $restOfFlow;

    /**
     * @var int
     */
    public $flowResource;

    /**
     * @var string
     */
    public $resName;
    protected $_name = [
        'validDate'    => 'ValidDate',
        'voiceUsed'    => 'VoiceUsed',
        'resourceType' => 'ResourceType',
        'flowUsed'     => 'FlowUsed',
        'voiceTotal'   => 'VoiceTotal',
        'expireDate'   => 'ExpireDate',
        'smsUsed'      => 'SmsUsed',
        'restOfFlow'   => 'RestOfFlow',
        'flowResource' => 'FlowResource',
        'resName'      => 'ResName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }
        if (null !== $this->voiceUsed) {
            $res['VoiceUsed'] = $this->voiceUsed;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->flowUsed) {
            $res['FlowUsed'] = $this->flowUsed;
        }
        if (null !== $this->voiceTotal) {
            $res['VoiceTotal'] = $this->voiceTotal;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->smsUsed) {
            $res['SmsUsed'] = $this->smsUsed;
        }
        if (null !== $this->restOfFlow) {
            $res['RestOfFlow'] = $this->restOfFlow;
        }
        if (null !== $this->flowResource) {
            $res['FlowResource'] = $this->flowResource;
        }
        if (null !== $this->resName) {
            $res['ResName'] = $this->resName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardFlowInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }
        if (isset($map['VoiceUsed'])) {
            $model->voiceUsed = $map['VoiceUsed'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['FlowUsed'])) {
            $model->flowUsed = $map['FlowUsed'];
        }
        if (isset($map['VoiceTotal'])) {
            $model->voiceTotal = $map['VoiceTotal'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['SmsUsed'])) {
            $model->smsUsed = $map['SmsUsed'];
        }
        if (isset($map['RestOfFlow'])) {
            $model->restOfFlow = $map['RestOfFlow'];
        }
        if (isset($map['FlowResource'])) {
            $model->flowResource = $map['FlowResource'];
        }
        if (isset($map['ResName'])) {
            $model->resName = $map['ResName'];
        }

        return $model;
    }
}
