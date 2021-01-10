<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig;
use AlibabaCloud\Tea\Model;

class DescribeCasterConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $channelEnable;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $urgentMaterialId;

    /**
     * @var transcodeConfig
     */
    public $transcodeConfig;

    /**
     * @var string
     */
    public $programName;

    /**
     * @var float
     */
    public $delay;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $sideOutputUrl;

    /**
     * @var string
     */
    public $casterName;

    /**
     * @var int
     */
    public $programEffect;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var recordConfig
     */
    public $recordConfig;
    protected $_name = [
        'channelEnable'    => 'ChannelEnable',
        'requestId'        => 'RequestId',
        'domainName'       => 'DomainName',
        'urgentMaterialId' => 'UrgentMaterialId',
        'transcodeConfig'  => 'TranscodeConfig',
        'programName'      => 'ProgramName',
        'delay'            => 'Delay',
        'callbackUrl'      => 'CallbackUrl',
        'sideOutputUrl'    => 'SideOutputUrl',
        'casterName'       => 'CasterName',
        'programEffect'    => 'ProgramEffect',
        'casterId'         => 'CasterId',
        'recordConfig'     => 'RecordConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelEnable) {
            $res['ChannelEnable'] = $this->channelEnable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->urgentMaterialId) {
            $res['UrgentMaterialId'] = $this->urgentMaterialId;
        }
        if (null !== $this->transcodeConfig) {
            $res['TranscodeConfig'] = null !== $this->transcodeConfig ? $this->transcodeConfig->toMap() : null;
        }
        if (null !== $this->programName) {
            $res['ProgramName'] = $this->programName;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->sideOutputUrl) {
            $res['SideOutputUrl'] = $this->sideOutputUrl;
        }
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->programEffect) {
            $res['ProgramEffect'] = $this->programEffect;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->recordConfig) {
            $res['RecordConfig'] = null !== $this->recordConfig ? $this->recordConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelEnable'])) {
            $model->channelEnable = $map['ChannelEnable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['UrgentMaterialId'])) {
            $model->urgentMaterialId = $map['UrgentMaterialId'];
        }
        if (isset($map['TranscodeConfig'])) {
            $model->transcodeConfig = transcodeConfig::fromMap($map['TranscodeConfig']);
        }
        if (isset($map['ProgramName'])) {
            $model->programName = $map['ProgramName'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['SideOutputUrl'])) {
            $model->sideOutputUrl = $map['SideOutputUrl'];
        }
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['ProgramEffect'])) {
            $model->programEffect = $map['ProgramEffect'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['RecordConfig'])) {
            $model->recordConfig = recordConfig::fromMap($map['RecordConfig']);
        }

        return $model;
    }
}
