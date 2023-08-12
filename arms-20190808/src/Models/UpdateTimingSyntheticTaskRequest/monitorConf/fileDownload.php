<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Tea\Model;

class fileDownload extends Model
{
    /**
     * @example 5000
     *
     * @var int
     */
    public $connectionTimeout;

    /**
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @example 0
     *
     * @var int
     */
    public $downloadKernel;

    /**
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateAuthError;

    /**
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateCanceledError;

    /**
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateOutOfDateError;

    /**
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateStatusError;

    /**
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateUntrustworthyError;

    /**
     * @example 0
     *
     * @var int
     */
    public $ignoreCertificateUsingError;

    /**
     * @example 0
     *
     * @var int
     */
    public $ignoreInvalidHostError;

    /**
     * @example 60000
     *
     * @var int
     */
    public $monitorTimeout;

    /**
     * @example 1
     *
     * @var int
     */
    public $quickProtocol;

    /**
     * @example 0
     *
     * @var int
     */
    public $redirection;

    /**
     * @example https://img.alicdn.com/tfs/TB13DzOjXP7gK0jSZFjXXc5aXXa-212-48.png
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @example 2048
     *
     * @var int
     */
    public $transmissionSize;
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

        return $model;
    }
}
