<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data\slsConfigDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data\xtraceDetails;

class data extends Model
{
    /**
     * @var string
     */
    public $accessLogHeader;
    /**
     * @var int
     */
    public $downstreamConnectionBufferLimits;
    /**
     * @var int
     */
    public $downstreamHttp2MaxConcurrentStream;
    /**
     * @var int
     */
    public $downstreamIdleTime;
    /**
     * @var string
     */
    public $enableCustomAuthConfigPush;
    /**
     * @var bool
     */
    public $enableGenerateRequestId;
    /**
     * @var bool
     */
    public $enableGzip;
    /**
     * @var bool
     */
    public $enableHardwareAccelerate;
    /**
     * @var bool
     */
    public $enableHttp2;
    /**
     * @var bool
     */
    public $enableHttp3;
    /**
     * @var bool
     */
    public $enableProxyProtocol;
    /**
     * @var bool
     */
    public $enableSlashMerge;
    /**
     * @var bool
     */
    public $enableWaf;
    /**
     * @var string
     */
    public $gatewayUniqueId;
    /**
     * @var int
     */
    public $initialConnectionWindowSize;
    /**
     * @var int
     */
    public $initialStreamWindowSize;
    /**
     * @var int
     */
    public $keepaliveHeaderTimeout;
    /**
     * @var string
     */
    public $logFilterConfig;
    /**
     * @var string
     */
    public $noSupportedConfigList;
    /**
     * @var string
     */
    public $pathWithEscapedSlashes;
    /**
     * @var bool
     */
    public $preserveHeaderFormat;
    /**
     * @var slsConfigDetails
     */
    public $slsConfigDetails;
    /**
     * @var bool
     */
    public $supportWaf;
    /**
     * @var int
     */
    public $upstreamIdleTimeout;
    /**
     * @var int
     */
    public $websocketTermGracePeriod;
    /**
     * @var int
     */
    public $xffTrustedNum;
    /**
     * @var xtraceDetails
     */
    public $xtraceDetails;
    /**
     * @var string
     */
    public $zipAlgorithm;
    protected $_name = [
        'accessLogHeader'                    => 'AccessLogHeader',
        'downstreamConnectionBufferLimits'   => 'DownstreamConnectionBufferLimits',
        'downstreamHttp2MaxConcurrentStream' => 'DownstreamHttp2MaxConcurrentStream',
        'downstreamIdleTime'                 => 'DownstreamIdleTime',
        'enableCustomAuthConfigPush'         => 'EnableCustomAuthConfigPush',
        'enableGenerateRequestId'            => 'EnableGenerateRequestId',
        'enableGzip'                         => 'EnableGzip',
        'enableHardwareAccelerate'           => 'EnableHardwareAccelerate',
        'enableHttp2'                        => 'EnableHttp2',
        'enableHttp3'                        => 'EnableHttp3',
        'enableProxyProtocol'                => 'EnableProxyProtocol',
        'enableSlashMerge'                   => 'EnableSlashMerge',
        'enableWaf'                          => 'EnableWaf',
        'gatewayUniqueId'                    => 'GatewayUniqueId',
        'initialConnectionWindowSize'        => 'InitialConnectionWindowSize',
        'initialStreamWindowSize'            => 'InitialStreamWindowSize',
        'keepaliveHeaderTimeout'             => 'KeepaliveHeaderTimeout',
        'logFilterConfig'                    => 'LogFilterConfig',
        'noSupportedConfigList'              => 'NoSupportedConfigList',
        'pathWithEscapedSlashes'             => 'PathWithEscapedSlashes',
        'preserveHeaderFormat'               => 'PreserveHeaderFormat',
        'slsConfigDetails'                   => 'SlsConfigDetails',
        'supportWaf'                         => 'SupportWaf',
        'upstreamIdleTimeout'                => 'UpstreamIdleTimeout',
        'websocketTermGracePeriod'           => 'WebsocketTermGracePeriod',
        'xffTrustedNum'                      => 'XffTrustedNum',
        'xtraceDetails'                      => 'XtraceDetails',
        'zipAlgorithm'                       => 'ZipAlgorithm',
    ];

    public function validate()
    {
        if (null !== $this->slsConfigDetails) {
            $this->slsConfigDetails->validate();
        }
        if (null !== $this->xtraceDetails) {
            $this->xtraceDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLogHeader) {
            $res['AccessLogHeader'] = $this->accessLogHeader;
        }

        if (null !== $this->downstreamConnectionBufferLimits) {
            $res['DownstreamConnectionBufferLimits'] = $this->downstreamConnectionBufferLimits;
        }

        if (null !== $this->downstreamHttp2MaxConcurrentStream) {
            $res['DownstreamHttp2MaxConcurrentStream'] = $this->downstreamHttp2MaxConcurrentStream;
        }

        if (null !== $this->downstreamIdleTime) {
            $res['DownstreamIdleTime'] = $this->downstreamIdleTime;
        }

        if (null !== $this->enableCustomAuthConfigPush) {
            $res['EnableCustomAuthConfigPush'] = $this->enableCustomAuthConfigPush;
        }

        if (null !== $this->enableGenerateRequestId) {
            $res['EnableGenerateRequestId'] = $this->enableGenerateRequestId;
        }

        if (null !== $this->enableGzip) {
            $res['EnableGzip'] = $this->enableGzip;
        }

        if (null !== $this->enableHardwareAccelerate) {
            $res['EnableHardwareAccelerate'] = $this->enableHardwareAccelerate;
        }

        if (null !== $this->enableHttp2) {
            $res['EnableHttp2'] = $this->enableHttp2;
        }

        if (null !== $this->enableHttp3) {
            $res['EnableHttp3'] = $this->enableHttp3;
        }

        if (null !== $this->enableProxyProtocol) {
            $res['EnableProxyProtocol'] = $this->enableProxyProtocol;
        }

        if (null !== $this->enableSlashMerge) {
            $res['EnableSlashMerge'] = $this->enableSlashMerge;
        }

        if (null !== $this->enableWaf) {
            $res['EnableWaf'] = $this->enableWaf;
        }

        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        if (null !== $this->initialConnectionWindowSize) {
            $res['InitialConnectionWindowSize'] = $this->initialConnectionWindowSize;
        }

        if (null !== $this->initialStreamWindowSize) {
            $res['InitialStreamWindowSize'] = $this->initialStreamWindowSize;
        }

        if (null !== $this->keepaliveHeaderTimeout) {
            $res['KeepaliveHeaderTimeout'] = $this->keepaliveHeaderTimeout;
        }

        if (null !== $this->logFilterConfig) {
            $res['LogFilterConfig'] = $this->logFilterConfig;
        }

        if (null !== $this->noSupportedConfigList) {
            $res['NoSupportedConfigList'] = $this->noSupportedConfigList;
        }

        if (null !== $this->pathWithEscapedSlashes) {
            $res['PathWithEscapedSlashes'] = $this->pathWithEscapedSlashes;
        }

        if (null !== $this->preserveHeaderFormat) {
            $res['PreserveHeaderFormat'] = $this->preserveHeaderFormat;
        }

        if (null !== $this->slsConfigDetails) {
            $res['SlsConfigDetails'] = null !== $this->slsConfigDetails ? $this->slsConfigDetails->toArray($noStream) : $this->slsConfigDetails;
        }

        if (null !== $this->supportWaf) {
            $res['SupportWaf'] = $this->supportWaf;
        }

        if (null !== $this->upstreamIdleTimeout) {
            $res['UpstreamIdleTimeout'] = $this->upstreamIdleTimeout;
        }

        if (null !== $this->websocketTermGracePeriod) {
            $res['WebsocketTermGracePeriod'] = $this->websocketTermGracePeriod;
        }

        if (null !== $this->xffTrustedNum) {
            $res['XffTrustedNum'] = $this->xffTrustedNum;
        }

        if (null !== $this->xtraceDetails) {
            $res['XtraceDetails'] = null !== $this->xtraceDetails ? $this->xtraceDetails->toArray($noStream) : $this->xtraceDetails;
        }

        if (null !== $this->zipAlgorithm) {
            $res['ZipAlgorithm'] = $this->zipAlgorithm;
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
        if (isset($map['AccessLogHeader'])) {
            $model->accessLogHeader = $map['AccessLogHeader'];
        }

        if (isset($map['DownstreamConnectionBufferLimits'])) {
            $model->downstreamConnectionBufferLimits = $map['DownstreamConnectionBufferLimits'];
        }

        if (isset($map['DownstreamHttp2MaxConcurrentStream'])) {
            $model->downstreamHttp2MaxConcurrentStream = $map['DownstreamHttp2MaxConcurrentStream'];
        }

        if (isset($map['DownstreamIdleTime'])) {
            $model->downstreamIdleTime = $map['DownstreamIdleTime'];
        }

        if (isset($map['EnableCustomAuthConfigPush'])) {
            $model->enableCustomAuthConfigPush = $map['EnableCustomAuthConfigPush'];
        }

        if (isset($map['EnableGenerateRequestId'])) {
            $model->enableGenerateRequestId = $map['EnableGenerateRequestId'];
        }

        if (isset($map['EnableGzip'])) {
            $model->enableGzip = $map['EnableGzip'];
        }

        if (isset($map['EnableHardwareAccelerate'])) {
            $model->enableHardwareAccelerate = $map['EnableHardwareAccelerate'];
        }

        if (isset($map['EnableHttp2'])) {
            $model->enableHttp2 = $map['EnableHttp2'];
        }

        if (isset($map['EnableHttp3'])) {
            $model->enableHttp3 = $map['EnableHttp3'];
        }

        if (isset($map['EnableProxyProtocol'])) {
            $model->enableProxyProtocol = $map['EnableProxyProtocol'];
        }

        if (isset($map['EnableSlashMerge'])) {
            $model->enableSlashMerge = $map['EnableSlashMerge'];
        }

        if (isset($map['EnableWaf'])) {
            $model->enableWaf = $map['EnableWaf'];
        }

        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        if (isset($map['InitialConnectionWindowSize'])) {
            $model->initialConnectionWindowSize = $map['InitialConnectionWindowSize'];
        }

        if (isset($map['InitialStreamWindowSize'])) {
            $model->initialStreamWindowSize = $map['InitialStreamWindowSize'];
        }

        if (isset($map['KeepaliveHeaderTimeout'])) {
            $model->keepaliveHeaderTimeout = $map['KeepaliveHeaderTimeout'];
        }

        if (isset($map['LogFilterConfig'])) {
            $model->logFilterConfig = $map['LogFilterConfig'];
        }

        if (isset($map['NoSupportedConfigList'])) {
            $model->noSupportedConfigList = $map['NoSupportedConfigList'];
        }

        if (isset($map['PathWithEscapedSlashes'])) {
            $model->pathWithEscapedSlashes = $map['PathWithEscapedSlashes'];
        }

        if (isset($map['PreserveHeaderFormat'])) {
            $model->preserveHeaderFormat = $map['PreserveHeaderFormat'];
        }

        if (isset($map['SlsConfigDetails'])) {
            $model->slsConfigDetails = slsConfigDetails::fromMap($map['SlsConfigDetails']);
        }

        if (isset($map['SupportWaf'])) {
            $model->supportWaf = $map['SupportWaf'];
        }

        if (isset($map['UpstreamIdleTimeout'])) {
            $model->upstreamIdleTimeout = $map['UpstreamIdleTimeout'];
        }

        if (isset($map['WebsocketTermGracePeriod'])) {
            $model->websocketTermGracePeriod = $map['WebsocketTermGracePeriod'];
        }

        if (isset($map['XffTrustedNum'])) {
            $model->xffTrustedNum = $map['XffTrustedNum'];
        }

        if (isset($map['XtraceDetails'])) {
            $model->xtraceDetails = xtraceDetails::fromMap($map['XtraceDetails']);
        }

        if (isset($map['ZipAlgorithm'])) {
            $model->zipAlgorithm = $map['ZipAlgorithm'];
        }

        return $model;
    }
}
