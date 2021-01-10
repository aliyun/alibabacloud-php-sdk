<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetCasterConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $casterName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $transcodeConfig;

    /**
     * @var string
     */
    public $recordConfig;

    /**
     * @var float
     */
    public $delay;

    /**
     * @var string
     */
    public $urgentMaterialId;

    /**
     * @var string
     */
    public $sideOutputUrl;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var int
     */
    public $programEffect;

    /**
     * @var string
     */
    public $programName;

    /**
     * @var int
     */
    public $channelEnable;
    protected $_name = [
        'ownerId'          => 'OwnerId',
        'casterId'         => 'CasterId',
        'casterName'       => 'CasterName',
        'domainName'       => 'DomainName',
        'transcodeConfig'  => 'TranscodeConfig',
        'recordConfig'     => 'RecordConfig',
        'delay'            => 'Delay',
        'urgentMaterialId' => 'UrgentMaterialId',
        'sideOutputUrl'    => 'SideOutputUrl',
        'callbackUrl'      => 'CallbackUrl',
        'programEffect'    => 'ProgramEffect',
        'programName'      => 'ProgramName',
        'channelEnable'    => 'ChannelEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = $this->transcodeConfig;
        }
        if (null !== $this->recordConfig) {
            $res['RecordConfig'] = $this->recordConfig;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->urgentMaterialId) {
            $res['UrgentMaterialId'] = $this->urgentMaterialId;
        }
        if (null !== $this->sideOutputUrl) {
            $res['SideOutputUrl'] = $this->sideOutputUrl;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->programEffect) {
            $res['ProgramEffect'] = $this->programEffect;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->channelEnable) {
            $res['ChannelEnable'] = $this->channelEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCasterConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = $map['TranscodeConfig'];
        }
        if (isset($map['RecordConfig'])) {
            $model->recordConfig = $map['RecordConfig'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['UrgentMaterialId'])) {
            $model->urgentMaterialId = $map['UrgentMaterialId'];
        }
        if (isset($map['SideOutputUrl'])) {
            $model->sideOutputUrl = $map['SideOutputUrl'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ProgramEffect'])) {
            $model->programEffect = $map['ProgramEffect'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['ChannelEnable'])) {
            $model->channelEnable = $map['ChannelEnable'];
        }

        return $model;
    }
}
