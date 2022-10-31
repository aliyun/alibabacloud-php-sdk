<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetCasterConfigRequest extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $casterName;

    /**
     * @var int
     */
    public $channelEnable;

    /**
     * @var float
     */
    public $delay;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $programEffect;

    /**
     * @var string
     */
    public $programName;

    /**
     * @var string
     */
    public $recordConfig;

    /**
     * @var string
     */
    public $sideOutputUrl;

    /**
     * @var string
     */
    public $sideOutputUrlList;

    /**
     * @var string
     */
    public $syncGroupsConfig;

    /**
     * @var string
     */
    public $transcodeConfig;

    /**
     * @var string
     */
    public $urgentLiveStreamUrl;

    /**
     * @var string
     */
    public $urgentMaterialId;
    protected $_name = [
        'callbackUrl'         => 'CallbackUrl',
        'casterId'            => 'CasterId',
        'casterName'          => 'CasterName',
        'channelEnable'       => 'ChannelEnable',
        'delay'               => 'Delay',
        'domainName'          => 'DomainName',
        'ownerId'             => 'OwnerId',
        'programEffect'       => 'ProgramEffect',
        'programName'         => 'ProgramName',
        'recordConfig'        => 'RecordConfig',
        'sideOutputUrl'       => 'SideOutputUrl',
        'sideOutputUrlList'   => 'SideOutputUrlList',
        'syncGroupsConfig'    => 'SyncGroupsConfig',
        'transcodeConfig'     => 'TranscodeConfig',
        'urgentLiveStreamUrl' => 'UrgentLiveStreamUrl',
        'urgentMaterialId'    => 'UrgentMaterialId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->channelEnable) {
            $res['ChannelEnable'] = $this->channelEnable;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->programEffect) {
            $res['ProgramEffect'] = $this->programEffect;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->recordConfig) {
            $res['RecordConfig'] = $this->recordConfig;
        }
        if (null !== $this->sideOutputUrl) {
            $res['SideOutputUrl'] = $this->sideOutputUrl;
        }
        if (null !== $this->sideOutputUrlList) {
            $res['SideOutputUrlList'] = $this->sideOutputUrlList;
        }
        if (null !== $this->syncGroupsConfig) {
            $res['SyncGroupsConfig'] = $this->syncGroupsConfig;
        }
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = $this->transcodeConfig;
        }
        if (null !== $this->urgentLiveStreamUrl) {
            $res['UrgentLiveStreamUrl'] = $this->urgentLiveStreamUrl;
        }
        if (null !== $this->urgentMaterialId) {
            $res['UrgentMaterialId'] = $this->urgentMaterialId;
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['ChannelEnable'])) {
            $model->channelEnable = $map['ChannelEnable'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProgramEffect'])) {
            $model->programEffect = $map['ProgramEffect'];
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['RecordConfig'])) {
            $model->recordConfig = $map['RecordConfig'];
        }
        if (isset($map['SideOutputUrl'])) {
            $model->sideOutputUrl = $map['SideOutputUrl'];
        }
        if (isset($map['SideOutputUrlList'])) {
            $model->sideOutputUrlList = $map['SideOutputUrlList'];
        }
        if (isset($map['SyncGroupsConfig'])) {
            $model->syncGroupsConfig = $map['SyncGroupsConfig'];
        }
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = $map['TranscodeConfig'];
        }
        if (isset($map['UrgentLiveStreamUrl'])) {
            $model->urgentLiveStreamUrl = $map['UrgentLiveStreamUrl'];
        }
        if (isset($map['UrgentMaterialId'])) {
            $model->urgentMaterialId = $map['UrgentMaterialId'];
        }

        return $model;
    }
}
