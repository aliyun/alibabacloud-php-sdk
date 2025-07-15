<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveEdgeTransferResponseBody extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ingest domain.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The HTTPDNS API that is used to obtain the destination URLs.
     *
     * @example http://developer.aliyundoc.com/****
     *
     * @var string
     */
    public $httpDns;

    /**
     * @description The request ID.
     *
     * @example 53FCB985-C67C-467B-B2B3-398430A21E14
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the ingested stream.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The destination domain names to which the ingested stream is relayed. Multiple domain names are separated by commas (,).
     *
     * @example learn.aliyundoc.com,guide.aliyundoc.com
     *
     * @var string
     */
    public $targetDomainList;

    /**
     * @description Indicates whether stream ingest parameters are passed through. Valid values:
     *
     *   **yes**: Stream ingest parameters are passed through.
     *   **no**: Stream ingest parameters are not passed through.
     *
     * @example yes
     *
     * @var string
     */
    public $transferArgs;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'httpDns' => 'HttpDns',
        'requestId' => 'RequestId',
        'streamName' => 'StreamName',
        'targetDomainList' => 'TargetDomainList',
        'transferArgs' => 'TransferArgs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->httpDns) {
            $res['HttpDns'] = $this->httpDns;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->targetDomainList) {
            $res['TargetDomainList'] = $this->targetDomainList;
        }
        if (null !== $this->transferArgs) {
            $res['TransferArgs'] = $this->transferArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveEdgeTransferResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['HttpDns'])) {
            $model->httpDns = $map['HttpDns'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['TargetDomainList'])) {
            $model->targetDomainList = $map['TargetDomainList'];
        }
        if (isset($map['TransferArgs'])) {
            $model->transferArgs = $map['TransferArgs'];
        }

        return $model;
    }
}
