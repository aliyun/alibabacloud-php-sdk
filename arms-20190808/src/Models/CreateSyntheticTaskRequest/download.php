<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class download extends Model
{
    /**
     * @description The connection timeout period.
     *
     * @example 200
     *
     * @var float
     */
    public $connectionTimeout;

    /**
     * @description The items to be ignored in a certificate error. Pass the values of the check boxes that are separated with vertical bars (|).
     *
     * @example Host:www.example.com|Referer:www.example.com
     *
     * @var string
     */
    public $downloadCustomHeaderContent;

    /**
     * @description The custom host mode.
     *
     *   1: round robin
     *   0: random
     *
     * @example 1
     *
     * @var int
     */
    public $downloadCustomHost;

    /**
     * @description The custom host IP address. You can enter multiple IP addresses. Separate the IP addresses with commas (,).
     *
     * @example ipv4:192.168.2.1,192.168.2.5:img.a.com|192.168.2.1[8080]:img.a.com
     *
     * @var string
     */
    public $downloadCustomHostIp;

    /**
     * @description The items to be ignored in a certificate error. Pass the values of the check boxes that are separated with vertical bars (|).
     *
     * @example 1|2|4
     *
     * @var string
     */
    public $downloadIgnoreCertificateError;

    /**
     * @description The kernel type.
     *
     *   1: curl
     *   0: WinInet
     *
     * @example 1
     *
     * @var int
     */
    public $downloadKernel;

    /**
     * @description Specifies whether to support redirection.
     *
     * @example 0
     *
     * @var int
     */
    public $downloadRedirection;

    /**
     * @description The size of the download file. Unit: KB.
     *
     * @example 10240
     *
     * @var int
     */
    public $downloadTransmissionSize;

    /**
     * @description The monitoring duration.
     *
     * @example 30
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @description The QUIC protocol type.
     *
     *   1: http1
     *   2: http2
     *   3: http3
     *
     * @example 1
     *
     * @var string
     */
    public $quickProtocol;

    /**
     * @description The keyword that is used in verification.
     *
     * @example keyword
     *
     * @var string
     */
    public $validateKeywords;

    /**
     * @description The verification method.
     *
     *   0: no verification
     *   1: string verification
     *   2: MD5 verification
     *
     * @example 0
     *
     * @var int
     */
    public $verifyWay;

    /**
     * @description The whitelist for DNS hijacking.
     *
     * @example [{\\"src\\":\\"211.154.166.174\\"}]
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'connectionTimeout' => 'ConnectionTimeout',
        'downloadCustomHeaderContent' => 'DownloadCustomHeaderContent',
        'downloadCustomHost' => 'DownloadCustomHost',
        'downloadCustomHostIp' => 'DownloadCustomHostIp',
        'downloadIgnoreCertificateError' => 'DownloadIgnoreCertificateError',
        'downloadKernel' => 'DownloadKernel',
        'downloadRedirection' => 'DownloadRedirection',
        'downloadTransmissionSize' => 'DownloadTransmissionSize',
        'monitorTimeout' => 'MonitorTimeout',
        'quickProtocol' => 'QuickProtocol',
        'validateKeywords' => 'ValidateKeywords',
        'verifyWay' => 'VerifyWay',
        'whiteList' => 'WhiteList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionTimeout) {
            $res['ConnectionTimeout'] = $this->connectionTimeout;
        }
        if (null !== $this->downloadCustomHeaderContent) {
            $res['DownloadCustomHeaderContent'] = $this->downloadCustomHeaderContent;
        }
        if (null !== $this->downloadCustomHost) {
            $res['DownloadCustomHost'] = $this->downloadCustomHost;
        }
        if (null !== $this->downloadCustomHostIp) {
            $res['DownloadCustomHostIp'] = $this->downloadCustomHostIp;
        }
        if (null !== $this->downloadIgnoreCertificateError) {
            $res['DownloadIgnoreCertificateError'] = $this->downloadIgnoreCertificateError;
        }
        if (null !== $this->downloadKernel) {
            $res['DownloadKernel'] = $this->downloadKernel;
        }
        if (null !== $this->downloadRedirection) {
            $res['DownloadRedirection'] = $this->downloadRedirection;
        }
        if (null !== $this->downloadTransmissionSize) {
            $res['DownloadTransmissionSize'] = $this->downloadTransmissionSize;
        }
        if (null !== $this->monitorTimeout) {
            $res['MonitorTimeout'] = $this->monitorTimeout;
        }
        if (null !== $this->quickProtocol) {
            $res['QuickProtocol'] = $this->quickProtocol;
        }
        if (null !== $this->validateKeywords) {
            $res['ValidateKeywords'] = $this->validateKeywords;
        }
        if (null !== $this->verifyWay) {
            $res['VerifyWay'] = $this->verifyWay;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return download
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionTimeout'])) {
            $model->connectionTimeout = $map['ConnectionTimeout'];
        }
        if (isset($map['DownloadCustomHeaderContent'])) {
            $model->downloadCustomHeaderContent = $map['DownloadCustomHeaderContent'];
        }
        if (isset($map['DownloadCustomHost'])) {
            $model->downloadCustomHost = $map['DownloadCustomHost'];
        }
        if (isset($map['DownloadCustomHostIp'])) {
            $model->downloadCustomHostIp = $map['DownloadCustomHostIp'];
        }
        if (isset($map['DownloadIgnoreCertificateError'])) {
            $model->downloadIgnoreCertificateError = $map['DownloadIgnoreCertificateError'];
        }
        if (isset($map['DownloadKernel'])) {
            $model->downloadKernel = $map['DownloadKernel'];
        }
        if (isset($map['DownloadRedirection'])) {
            $model->downloadRedirection = $map['DownloadRedirection'];
        }
        if (isset($map['DownloadTransmissionSize'])) {
            $model->downloadTransmissionSize = $map['DownloadTransmissionSize'];
        }
        if (isset($map['MonitorTimeout'])) {
            $model->monitorTimeout = $map['MonitorTimeout'];
        }
        if (isset($map['QuickProtocol'])) {
            $model->quickProtocol = $map['QuickProtocol'];
        }
        if (isset($map['ValidateKeywords'])) {
            $model->validateKeywords = $map['ValidateKeywords'];
        }
        if (isset($map['VerifyWay'])) {
            $model->verifyWay = $map['VerifyWay'];
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
