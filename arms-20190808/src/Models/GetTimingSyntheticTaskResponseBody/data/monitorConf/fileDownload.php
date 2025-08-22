<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\Dara\Model;

class fileDownload extends Model
{
    /**
     * @var int
     */
    public $connectionTimeout;

    /**
     * @var string[]
     */
    public $customHeaderContent;

    /**
     * @var int
     */
    public $downloadKernel;

    /**
     * @var int
     */
    public $ignoreCertificateAuthError;

    /**
     * @var int
     */
    public $ignoreCertificateCanceledError;

    /**
     * @var int
     */
    public $ignoreCertificateOutOfDateError;

    /**
     * @var int
     */
    public $ignoreCertificateStatusError;

    /**
     * @var int
     */
    public $ignoreCertificateUntrustworthyError;

    /**
     * @var int
     */
    public $ignoreCertificateUsingError;

    /**
     * @var int
     */
    public $ignoreInvalidHostError;

    /**
     * @var int
     */
    public $monitorTimeout;

    /**
     * @var int
     */
    public $quickProtocol;

    /**
     * @var int
     */
    public $redirection;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var int
     */
    public $transmissionSize;

    /**
     * @var string
     */
    public $validateKeywords;

    /**
     * @var int
     */
    public $verifyWay;

    /**
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'connectionTimeout' => 'ConnectionTimeout',
        'customHeaderContent' => 'CustomHeaderContent',
        'downloadKernel' => 'DownloadKernel',
        'ignoreCertificateAuthError' => 'IgnoreCertificateAuthError',
        'ignoreCertificateCanceledError' => 'IgnoreCertificateCanceledError',
        'ignoreCertificateOutOfDateError' => 'IgnoreCertificateOutOfDateError',
        'ignoreCertificateStatusError' => 'IgnoreCertificateStatusError',
        'ignoreCertificateUntrustworthyError' => 'IgnoreCertificateUntrustworthyError',
        'ignoreCertificateUsingError' => 'IgnoreCertificateUsingError',
        'ignoreInvalidHostError' => 'IgnoreInvalidHostError',
        'monitorTimeout' => 'MonitorTimeout',
        'quickProtocol' => 'QuickProtocol',
        'redirection' => 'Redirection',
        'targetUrl' => 'TargetUrl',
        'transmissionSize' => 'TransmissionSize',
        'validateKeywords' => 'ValidateKeywords',
        'verifyWay' => 'VerifyWay',
        'whiteList' => 'WhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->customHeaderContent)) {
            Model::validateArray($this->customHeaderContent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionTimeout) {
            $res['ConnectionTimeout'] = $this->connectionTimeout;
        }

        if (null !== $this->customHeaderContent) {
            if (\is_array($this->customHeaderContent)) {
                $res['CustomHeaderContent'] = [];
                foreach ($this->customHeaderContent as $key1 => $value1) {
                    $res['CustomHeaderContent'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionTimeout'])) {
            $model->connectionTimeout = $map['ConnectionTimeout'];
        }

        if (isset($map['CustomHeaderContent'])) {
            if (!empty($map['CustomHeaderContent'])) {
                $model->customHeaderContent = [];
                foreach ($map['CustomHeaderContent'] as $key1 => $value1) {
                    $model->customHeaderContent[$key1] = $value1;
                }
            }
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
