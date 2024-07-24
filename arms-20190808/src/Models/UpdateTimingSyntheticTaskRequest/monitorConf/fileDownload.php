<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class fileDownload extends Model
{
    /**
     * @description Unit: milliseconds. Minimum value: 1000. Maximum value: 120000. Default value: 5000.
     *
     * @example 5000
     *
     * @var int
     */
    public $connectionTimeout;

    /**
     * @description The content of the custom request header. Format: JSON map.
     *
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @description The kernel type. Valid values:
     *
     *   1: curl
     *   0: WinInet
     *
     * @example 0
     *
     * @var int
     */
    public $downloadKernel;

    /**
     * @description Specifies whether to ignore CA certificate authentication errors. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateAuthError;

    /**
     * @description Specifies whether to ignore certificate revocation errors. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateCanceledError;

    /**
     * @description Specifies whether to ignore certificate invalidity. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateOutOfDateError;

    /**
     * @description Specifies whether to ignore certificate status errors. 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateStatusError;

    /**
     * @description Specifies whether to ignore certificate incredibility. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateUntrustworthyError;

    /**
     * @description Specifies whether to ignore certificate usage errors. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateUsingError;

    /**
     * @description Specifies whether to ignore host invalidity. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $ignoreInvalidHostError;

    /**
     * @description The monitoring timeout period. Unit: milliseconds. Minimum value: 1000. Maximum value: 120000. Default value: 60000.
     *
     * @example 60000
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @description The QUIC protocol type. Valid values:
     *
     *   1: HTTP/1
     *   2: HTTP/2
     *   3: HTTP/3
     *
     * @example 1
     *
     * @var int
     */
    public $quickProtocol;

    /**
     * @description Specifies whether to support redirection. Valid values: 0: No. 1: Yes. Default value: 1.
     *
     * @example 0
     *
     * @var int
     */
    public $redirection;

    /**
     * @description The URL that is used to download the file.
     *
     * @example https://img.alicdn.com/tfs/TB13DzOjXP7gK0jSZFjXXc5aXXa-212-48.png
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The maximum file size of a single transfer. Unit: KB. Minimum value: 1. Maximum value: 20480. Valid values: 2048.
     *
     * @example 2048
     *
     * @var int
     */
    public $transmissionSize;

    /**
     * @description The keyword that is used in verification.
     *
     * @example aliyun
     *
     * @var string
     */
    public $validateKeywords;

    /**
     * @description The verification method. Valid values:
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
     * @description The whitelisted objects that are used to avoid DNS hijacking. The objects can be IP addresses, wildcard mask, subnet mask, or CNAME records. Separate multiple objects with vertical bars (|). Example: www.aliyun.com:203.0.3.55|203.3.44.67. It indicates that all IP addresses that belong to the www.aliyun.com domain name except 203.0.3.55 and 203.3.44.67 are hijacked.
     *
     * @example www.aliyun.com:203.0.3.55|203.3.44.67
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'connectionTimeout'                   => 'ConnectionTimeout',
        'customHeaderContent'                 => 'CustomHeaderContent',
        'downloadKernel'                      => 'DownloadKernel',
        'ignoreCertificateAuthError'          => 'IgnoreCertificateAuthError',
        'ignoreCertificateCanceledError'      => 'IgnoreCertificateCanceledError',
        'ignoreCertificateOutOfDateError'     => 'IgnoreCertificateOutOfDateError',
        'ignoreCertificateStatusError'        => 'IgnoreCertificateStatusError',
        'ignoreCertificateUntrustworthyError' => 'IgnoreCertificateUntrustworthyError',
        'ignoreCertificateUsingError'         => 'IgnoreCertificateUsingError',
        'ignoreInvalidHostError'              => 'IgnoreInvalidHostError',
        'monitorTimeout'                      => 'MonitorTimeout',
        'quickProtocol'                       => 'QuickProtocol',
        'redirection'                         => 'Redirection',
        'targetUrl'                           => 'TargetUrl',
        'transmissionSize'                    => 'TransmissionSize',
        'validateKeywords'                    => 'ValidateKeywords',
        'verifyWay'                           => 'VerifyWay',
        'whiteList'                           => 'WhiteList',
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
        if (null !== $this->customHeaderContent) {
            $res['CustomHeaderContent'] = $this->customHeaderContent;
        }
        if (null !== $this->downloadKernel) {
            $res['DownloadKernel'] = $this->downloadKernel;
        }
        if (null !== $this->ignoreCertificateAuthError) {
            $res['IgnoreCertificateAuthError'] = $this->ignoreCertificateAuthError;
        }
        if (null !== $this->ignoreCertificateCanceledError) {
            $res['IgnoreCertificateCanceledError'] = $this->ignoreCertificateCanceledError;
        }
        if (null !== $this->ignoreCertificateOutOfDateError) {
            $res['IgnoreCertificateOutOfDateError'] = $this->ignoreCertificateOutOfDateError;
        }
        if (null !== $this->ignoreCertificateStatusError) {
            $res['IgnoreCertificateStatusError'] = $this->ignoreCertificateStatusError;
        }
        if (null !== $this->ignoreCertificateUntrustworthyError) {
            $res['IgnoreCertificateUntrustworthyError'] = $this->ignoreCertificateUntrustworthyError;
        }
        if (null !== $this->ignoreCertificateUsingError) {
            $res['IgnoreCertificateUsingError'] = $this->ignoreCertificateUsingError;
        }
        if (null !== $this->ignoreInvalidHostError) {
            $res['IgnoreInvalidHostError'] = $this->ignoreInvalidHostError;
        }
        if (null !== $this->monitorTimeout) {
            $res['MonitorTimeout'] = $this->monitorTimeout;
        }
        if (null !== $this->quickProtocol) {
            $res['QuickProtocol'] = $this->quickProtocol;
        }
        if (null !== $this->redirection) {
            $res['Redirection'] = $this->redirection;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->transmissionSize) {
            $res['TransmissionSize'] = $this->transmissionSize;
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
     * @return fileDownload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionTimeout'])) {
            $model->connectionTimeout = $map['ConnectionTimeout'];
        }
        if (isset($map['CustomHeaderContent'])) {
            $model->customHeaderContent = $map['CustomHeaderContent'];
        }
        if (isset($map['DownloadKernel'])) {
            $model->downloadKernel = $map['DownloadKernel'];
        }
        if (isset($map['IgnoreCertificateAuthError'])) {
            $model->ignoreCertificateAuthError = $map['IgnoreCertificateAuthError'];
        }
        if (isset($map['IgnoreCertificateCanceledError'])) {
            $model->ignoreCertificateCanceledError = $map['IgnoreCertificateCanceledError'];
        }
        if (isset($map['IgnoreCertificateOutOfDateError'])) {
            $model->ignoreCertificateOutOfDateError = $map['IgnoreCertificateOutOfDateError'];
        }
        if (isset($map['IgnoreCertificateStatusError'])) {
            $model->ignoreCertificateStatusError = $map['IgnoreCertificateStatusError'];
        }
        if (isset($map['IgnoreCertificateUntrustworthyError'])) {
            $model->ignoreCertificateUntrustworthyError = $map['IgnoreCertificateUntrustworthyError'];
        }
        if (isset($map['IgnoreCertificateUsingError'])) {
            $model->ignoreCertificateUsingError = $map['IgnoreCertificateUsingError'];
        }
        if (isset($map['IgnoreInvalidHostError'])) {
            $model->ignoreInvalidHostError = $map['IgnoreInvalidHostError'];
        }
        if (isset($map['MonitorTimeout'])) {
            $model->monitorTimeout = $map['MonitorTimeout'];
        }
        if (isset($map['QuickProtocol'])) {
            $model->quickProtocol = $map['QuickProtocol'];
        }
        if (isset($map['Redirection'])) {
            $model->redirection = $map['Redirection'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['TransmissionSize'])) {
            $model->transmissionSize = $map['TransmissionSize'];
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
