<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class download extends Model
{
    /**
     * @description The timeout period of the file download task.
     *
     * @example 200
     *
     * @var int
     */
    public $connectionTimeout;

    /**
     * @description The items to be ignored in a certificate error. Multiple values are concatenated with vertical bars (|).
     *
     * @example char
     *
     * @var string
     */
    public $downloadCustomHeaderContent;

    /**
     * @description The custom host. Valid values:
     *
     *   1: round robin
     *   0: random
     *
     * @example 0
     *
     * @var int
     */
    public $downloadCustomHost;

    /**
     * @description The custom IP address of the host. Multiple IP addresses are separated with commas (,).
     *
     * @example 168.23.45.1
     *
     * @var string
     */
    public $downloadCustomHostIp;

    /**
     * @description The kernel type. Valid values:
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
     * @description Indicates whether redirection is supported.
     *
     * @example 1
     *
     * @var int
     */
    public $downloadRedirect;

    /**
     * @description The file size. Unit: KB.
     *
     * @example 20
     *
     * @var int
     */
    public $downloadTransmissionSize;

    /**
     * @description The monitoring duration.
     *
     * @example 12
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @description The QUIC protocol type. Valid values:
     *
     *   1: HTTP/1
     *   2: HTTP/2
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
     * @example test
     *
     * @var string
     */
    public $validateKeywords;

    /**
     * @description The method that is used to verify the response content. Valid values:
     *
     *   0: no verification.
     *   1: exact match with the verification string.
     *   2: partial match with the verification string.
     *   3: MD5 verification.
     *
     * @example 0
     *
     * @var int
     */
    public $verifyWay;

    /**
     * @description The whitelisted objects that are used to avoid DNS hijacking. Format: `<domain name>:<objects>`.
     *
     * >  WAP networks do not support hijacking.
     * @example [{\\"src\\":\\"211.154.166.174\\"}]
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'connectionTimeout'           => 'ConnectionTimeout',
        'downloadCustomHeaderContent' => 'DownloadCustomHeaderContent',
        'downloadCustomHost'          => 'DownloadCustomHost',
        'downloadCustomHostIp'        => 'DownloadCustomHostIp',
        'downloadKernel'              => 'DownloadKernel',
        'downloadRedirect'            => 'DownloadRedirect',
        'downloadTransmissionSize'    => 'DownloadTransmissionSize',
        'monitorTimeout'              => 'MonitorTimeout',
        'quickProtocol'               => 'QuickProtocol',
        'validateKeywords'            => 'ValidateKeywords',
        'verifyWay'                   => 'VerifyWay',
        'whiteList'                   => 'WhiteList',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->downloadKernel) {
            $res['DownloadKernel'] = $this->downloadKernel;
        }
        if (null !== $this->downloadRedirect) {
            $res['DownloadRedirect'] = $this->downloadRedirect;
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
        if (isset($map['DownloadKernel'])) {
            $model->downloadKernel = $map['DownloadKernel'];
        }
        if (isset($map['DownloadRedirect'])) {
            $model->downloadRedirect = $map['DownloadRedirect'];
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
