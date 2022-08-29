<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribePlayDetailResponseBody;

use AlibabaCloud\Tea\Model;

class baseInfos extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bps;

    /**
     * @var string
     */
    public $broadcastPace;

    /**
     * @var string
     */
    public $clientIP;

    /**
     * @var string
     */
    public $codec;

    /**
     * @var string
     */
    public $decodeStuckTime;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $firstFrameDuration;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $isHardDecode;

    /**
     * @var string
     */
    public $mdat;

    /**
     * @var string
     */
    public $moov;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $networkDuration;

    /**
     * @var string
     */
    public $networkStuckTime;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $playTs;

    /**
     * @var string
     */
    public $playerLoadDuration;

    /**
     * @var string
     */
    public $playerPreDealDuration;

    /**
     * @var string
     */
    public $playerReadyDuration;

    /**
     * @var string
     */
    public $sdkVersion;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'appName'               => 'AppName',
        'bps'                   => 'Bps',
        'broadcastPace'         => 'BroadcastPace',
        'clientIP'              => 'ClientIP',
        'codec'                 => 'Codec',
        'decodeStuckTime'       => 'DecodeStuckTime',
        'definition'            => 'Definition',
        'firstFrameDuration'    => 'FirstFrameDuration',
        'fps'                   => 'Fps',
        'isHardDecode'          => 'IsHardDecode',
        'mdat'                  => 'Mdat',
        'moov'                  => 'Moov',
        'network'               => 'Network',
        'networkDuration'       => 'NetworkDuration',
        'networkStuckTime'      => 'NetworkStuckTime',
        'os'                    => 'Os',
        'playTs'                => 'PlayTs',
        'playerLoadDuration'    => 'PlayerLoadDuration',
        'playerPreDealDuration' => 'PlayerPreDealDuration',
        'playerReadyDuration'   => 'PlayerReadyDuration',
        'sdkVersion'            => 'SdkVersion',
        'sessionId'             => 'SessionId',
        'status'                => 'Status',
        'terminalType'          => 'TerminalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->broadcastPace) {
            $res['BroadcastPace'] = $this->broadcastPace;
        }
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->decodeStuckTime) {
            $res['DecodeStuckTime'] = $this->decodeStuckTime;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->firstFrameDuration) {
            $res['FirstFrameDuration'] = $this->firstFrameDuration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->isHardDecode) {
            $res['IsHardDecode'] = $this->isHardDecode;
        }
        if (null !== $this->mdat) {
            $res['Mdat'] = $this->mdat;
        }
        if (null !== $this->moov) {
            $res['Moov'] = $this->moov;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->networkDuration) {
            $res['NetworkDuration'] = $this->networkDuration;
        }
        if (null !== $this->networkStuckTime) {
            $res['NetworkStuckTime'] = $this->networkStuckTime;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->playTs) {
            $res['PlayTs'] = $this->playTs;
        }
        if (null !== $this->playerLoadDuration) {
            $res['PlayerLoadDuration'] = $this->playerLoadDuration;
        }
        if (null !== $this->playerPreDealDuration) {
            $res['PlayerPreDealDuration'] = $this->playerPreDealDuration;
        }
        if (null !== $this->playerReadyDuration) {
            $res['PlayerReadyDuration'] = $this->playerReadyDuration;
        }
        if (null !== $this->sdkVersion) {
            $res['SdkVersion'] = $this->sdkVersion;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baseInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['BroadcastPace'])) {
            $model->broadcastPace = $map['BroadcastPace'];
        }
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['DecodeStuckTime'])) {
            $model->decodeStuckTime = $map['DecodeStuckTime'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['FirstFrameDuration'])) {
            $model->firstFrameDuration = $map['FirstFrameDuration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['IsHardDecode'])) {
            $model->isHardDecode = $map['IsHardDecode'];
        }
        if (isset($map['Mdat'])) {
            $model->mdat = $map['Mdat'];
        }
        if (isset($map['Moov'])) {
            $model->moov = $map['Moov'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['NetworkDuration'])) {
            $model->networkDuration = $map['NetworkDuration'];
        }
        if (isset($map['NetworkStuckTime'])) {
            $model->networkStuckTime = $map['NetworkStuckTime'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['PlayTs'])) {
            $model->playTs = $map['PlayTs'];
        }
        if (isset($map['PlayerLoadDuration'])) {
            $model->playerLoadDuration = $map['PlayerLoadDuration'];
        }
        if (isset($map['PlayerPreDealDuration'])) {
            $model->playerPreDealDuration = $map['PlayerPreDealDuration'];
        }
        if (isset($map['PlayerReadyDuration'])) {
            $model->playerReadyDuration = $map['PlayerReadyDuration'];
        }
        if (isset($map['SdkVersion'])) {
            $model->sdkVersion = $map['SdkVersion'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        return $model;
    }
}
