<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveEdgeTransferRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
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
    public $streamName;

    /**
     * @var string
     */
    public $targetDomainList;

    /**
     * @var string
     */
    public $transferArgs;
    protected $_name = [
        'appName'          => 'AppName',
        'domainName'       => 'DomainName',
        'httpDns'          => 'HttpDns',
        'ownerId'          => 'OwnerId',
        'streamName'       => 'StreamName',
        'targetDomainList' => 'TargetDomainList',
        'transferArgs'     => 'TransferArgs',
    ];

    public function validate()
    {
    }

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
