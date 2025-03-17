<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data\enableK8sSourceWorkloadFilter;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data\enableXffTrustedCidrs;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data\slsConfigDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayConfigResponseBody\data\xtraceDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {"requestMetadata":[],"responseHeaders":[],"requestHeaders":["x-test"],"responseMetadata":[]}
     *
     * @var string
     */
    public $accessLogHeader;

    /**
     * @example 32768
     *
     * @var int
     */
    public $downstreamConnectionBufferLimits;

    /**
     * @example 100
     *
     * @var int
     */
    public $downstreamHttp2MaxConcurrentStream;

    /**
     * @example 180
     *
     * @var int
     */
    public $downstreamIdleTime;

    /**
     * @example false
     *
     * @var string
     */
    public $enableCustomAuthConfigPush;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableGenerateRequestId;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableGzip;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableHardwareAccelerate;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableHttp2;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableHttp3;

    /**
     * @var enableK8sSourceWorkloadFilter
     */
    public $enableK8sSourceWorkloadFilter;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableProxyProtocol;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSlashMerge;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableWaf;

    /**
     * @var enableXffTrustedCidrs
     */
    public $enableXffTrustedCidrs;

    /**
     * @example gw-61f465fa2dd044069e2208c4912*****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 1048576
     *
     * @var int
     */
    public $initialConnectionWindowSize;

    /**
     * @example 65535
     *
     * @var int
     */
    public $initialStreamWindowSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $keepaliveHeaderTimeout;

    /**
     * @example ""
     *
     * @var string
     */
    public $logFilterConfig;

    /**
     * @example "EnableProxyProtocol,EnableCustomAuthConfigPush"
     *
     * @var string
     */
    public $noSupportedConfigList;

    /**
     * @example KEEP_UNCHANGED
     *
     * @var string
     */
    public $pathWithEscapedSlashes;

    /**
     * @example true
     *
     * @var bool
     */
    public $preserveHeaderFormat;

    /**
     * @var slsConfigDetails
     */
    public $slsConfigDetails;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportWaf;

    /**
     * @example 30
     *
     * @var int
     */
    public $upstreamIdleTimeout;

    /**
     * @example 30
     *
     * @var int
     */
    public $websocketTermGracePeriod;

    /**
     * @example 0
     *
     * @var int
     */
    public $xffTrustedNum;

    /**
     * @var xtraceDetails
     */
    public $xtraceDetails;

    /**
     * @example ["gzip"]
     *
     * @var string
     */
    public $zipAlgorithm;
    protected $_name = [
        'accessLogHeader' => 'AccessLogHeader',
        'downstreamConnectionBufferLimits' => 'DownstreamConnectionBufferLimits',
        'downstreamHttp2MaxConcurrentStream' => 'DownstreamHttp2MaxConcurrentStream',
        'downstreamIdleTime' => 'DownstreamIdleTime',
        'enableCustomAuthConfigPush' => 'EnableCustomAuthConfigPush',
        'enableGenerateRequestId' => 'EnableGenerateRequestId',
        'enableGzip' => 'EnableGzip',
        'enableHardwareAccelerate' => 'EnableHardwareAccelerate',
        'enableHttp2' => 'EnableHttp2',
        'enableHttp3' => 'EnableHttp3',
        'enableK8sSourceWorkloadFilter' => 'EnableK8sSourceWorkloadFilter',
        'enableProxyProtocol' => 'EnableProxyProtocol',
        'enableSlashMerge' => 'EnableSlashMerge',
        'enableWaf' => 'EnableWaf',
        'enableXffTrustedCidrs' => 'EnableXffTrustedCidrs',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'initialConnectionWindowSize' => 'InitialConnectionWindowSize',
        'initialStreamWindowSize' => 'InitialStreamWindowSize',
        'keepaliveHeaderTimeout' => 'KeepaliveHeaderTimeout',
        'logFilterConfig' => 'LogFilterConfig',
        'noSupportedConfigList' => 'NoSupportedConfigList',
        'pathWithEscapedSlashes' => 'PathWithEscapedSlashes',
        'preserveHeaderFormat' => 'PreserveHeaderFormat',
        'slsConfigDetails' => 'SlsConfigDetails',
        'supportWaf' => 'SupportWaf',
        'upstreamIdleTimeout' => 'UpstreamIdleTimeout',
        'websocketTermGracePeriod' => 'WebsocketTermGracePeriod',
        'xffTrustedNum' => 'XffTrustedNum',
        'xtraceDetails' => 'XtraceDetails',
        'zipAlgorithm' => 'ZipAlgorithm',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->enableK8sSourceWorkloadFilter) {
            $res['EnableK8sSourceWorkloadFilter'] = null !== $this->enableK8sSourceWorkloadFilter ? $this->enableK8sSourceWorkloadFilter->toMap() : null;
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
        if (null !== $this->enableXffTrustedCidrs) {
            $res['EnableXffTrustedCidrs'] = null !== $this->enableXffTrustedCidrs ? $this->enableXffTrustedCidrs->toMap() : null;
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
            $res['SlsConfigDetails'] = null !== $this->slsConfigDetails ? $this->slsConfigDetails->toMap() : null;
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
            $res['XtraceDetails'] = null !== $this->xtraceDetails ? $this->xtraceDetails->toMap() : null;
        }
        if (null !== $this->zipAlgorithm) {
            $res['ZipAlgorithm'] = $this->zipAlgorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
        if (isset($map['EnableK8sSourceWorkloadFilter'])) {
            $model->enableK8sSourceWorkloadFilter = enableK8sSourceWorkloadFilter::fromMap($map['EnableK8sSourceWorkloadFilter']);
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
        if (isset($map['EnableXffTrustedCidrs'])) {
            $model->enableXffTrustedCidrs = enableXffTrustedCidrs::fromMap($map['EnableXffTrustedCidrs']);
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
