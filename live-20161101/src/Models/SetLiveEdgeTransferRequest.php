<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveEdgeTransferRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. Regular expressions are supported, with a few limits. For more information, see the **Description about the AppName and StreamName parameters** section. For example, a value of **liveApp\\*\\*\\*\\*[1,2,3]** specifies that stream relay is configured for three applications: liveApp\\*\\*\\*\\*1, liveApp\\*\\*\\*\\*2, and liveApp\\*\\*\\*\\*3.****
     *
     * >
     *
     *   This parameter takes effect for only destination domain names that are specified by the TargetDomainList parameter.
     *
     *   You cannot use a caret (^) or a dollar sign ($) in a regular expression to configure the `AppName` parameter. Otherwise, stream relay fails.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ingest domain. Stream relay is configured based on the ingest domain. Only one stream relay configuration can be set for an ingest domain.
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The HTTPDNS API that is used to obtain the destination URLs. The request must contain the `TargetDomainList` parameter or the `HttpDns` parameter. The two parameters are mutually exclusive.
     *
     * >  If the `HttpDns` parameter is configured, you cannot configure the `TargetDomainList` parameter, and the `AppName` and `StreamName` parameters do not take effect.
     *
     * For information about the requirements on the structure of messages that are returned by the HTTPDNS API, see the **Description about the HTTPDNS API** section.
     *
     * @example http://developer.aliyundoc.com
     *
     * @var string
     */
    public $httpDns;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the ingested stream. Regular expressions are supported, with a few limits. For more information, see the **Description about the AppName and StreamName parameters** section. For example, a value of **liveStream\\*\\*\\*\\*[1,2,3]** specifies that stream relay is configured for three streams: liveStream\\*\\*\\*\\*1, liveStream\\*\\*\\*\\*2, and liveStream\\*\\*\\*\\*3.****
     *
     * >
     *
     *   This parameter takes effect for only destination domain names that are specified by the TargetDomainList parameter.
     *
     *   You cannot use a caret (^) or a dollar sign ($) in a regular expression to configure the `StreamName` parameter. Otherwise, stream relay fails.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The destination domain names to which you want to relay the ingested stream. Separate multiple domain names with commas (,). The request must contain the `TargetDomainList` parameter or the `HttpDns` parameter. The two parameters are mutually exclusive.
     *
     * >
     *
     *   The `AppName` and `StreamName` parameters take effect only when the `TargetDomainList` parameter is configured.
     *
     *   If the `TargetDomainList` parameter is configured, you cannot configure the `HttpDns` parameter.
     *
     * @example learn.aliyundoc.com,guide.aliyundoc.com
     *
     * @var string
     */
    public $targetDomainList;

    /**
     * @description Specifies whether to pass through stream ingest parameters. Valid values:
     *
     *   **yes**: passes through stream ingest parameters.
     *   **no**: does not pass through stream ingest parameters.
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
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return SetLiveEdgeTransferRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
