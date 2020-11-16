<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponse\recordConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponse\transcodeConfig;
use AlibabaCloud\Tea\Model;

class DescribeCasterConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

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
     * @var string
     */
    public $programName;

    /**
     * @var int
     */
    public $programEffect;

    /**
     * @var int
     */
    public $channelEnable;

    /**
     * @var transcodeConfig
     */
    public $transcodeConfig;

    /**
     * @var recordConfig
     */
    public $recordConfig;
    protected $_name = [
        'requestId'        => 'RequestId',
        'casterId'         => 'CasterId',
        'casterName'       => 'CasterName',
        'domainName'       => 'DomainName',
        'delay'            => 'Delay',
        'urgentMaterialId' => 'UrgentMaterialId',
        'sideOutputUrl'    => 'SideOutputUrl',
        'callbackUrl'      => 'CallbackUrl',
        'programName'      => 'ProgramName',
        'programEffect'    => 'ProgramEffect',
        'channelEnable'    => 'ChannelEnable',
        'transcodeConfig'  => 'TranscodeConfig',
        'recordConfig'     => 'RecordConfig',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('casterName', $this->casterName, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('delay', $this->delay, true);
        Model::validateRequired('urgentMaterialId', $this->urgentMaterialId, true);
        Model::validateRequired('sideOutputUrl', $this->sideOutputUrl, true);
        Model::validateRequired('callbackUrl', $this->callbackUrl, true);
        Model::validateRequired('programName', $this->programName, true);
        Model::validateRequired('programEffect', $this->programEffect, true);
        Model::validateRequired('channelEnable', $this->channelEnable, true);
        Model::validateRequired('transcodeConfig', $this->transcodeConfig, true);
        Model::validateRequired('recordConfig', $this->recordConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->programEffect) {
            $res['ProgramEffect'] = $this->programEffect;
        }
        if (null !== $this->channelEnable) {
            $res['ChannelEnable'] = $this->channelEnable;
        }
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = null !== $this->transcodeConfig ? $this->transcodeConfig->toMap() : null;
        }
        if (null !== $this->recordConfig) {
            $res['RecordConfig'] = null !== $this->recordConfig ? $this->recordConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['ProgramEffect'])) {
            $model->programEffect = $map['ProgramEffect'];
        }
        if (isset($map['ChannelEnable'])) {
            $model->channelEnable = $map['ChannelEnable'];
        }
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = transcodeConfig::fromMap($map['TranscodeConfig']);
        }
        if (isset($map['RecordConfig'])) {
            $model->recordConfig = recordConfig::fromMap($map['RecordConfig']);
        }

        return $model;
    }
}
