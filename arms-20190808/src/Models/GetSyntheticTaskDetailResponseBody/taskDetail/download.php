<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetSyntheticTaskDetailResponseBody\taskDetail;

use AlibabaCloud\Tea\Model;

class download extends Model
{
    /**
     * @var int
     */
    public $connectionTimeout;

    /**
     * @var string
     */
    public $downloadCustomHeaderContent;

    /**
     * @var int
     */
    public $downloadCustomHost;

    /**
     * @var string
     */
    public $downloadCustomHostIp;

    /**
     * @var int
     */
    public $downloadKernel;

    /**
     * @var int
     */
    public $downloadRedirect;

    /**
     * @var int
     */
    public $downloadTransmissionSize;

    /**
     * @var int
     */
    public $monitorTimeout;

    /**
     * @var string
     */
    public $quickProtocol;

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
