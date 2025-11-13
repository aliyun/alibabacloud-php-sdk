<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateRspDomainServerHoldStatusOteRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $operatorType;

    /**
     * @var string
     */
    public $serverHoldStatus;

    /**
     * @var string
     */
    public $statusMsg;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'domainName' => 'DomainName',
        'operatorId' => 'OperatorId',
        'operatorType' => 'OperatorType',
        'serverHoldStatus' => 'ServerHoldStatus',
        'statusMsg' => 'StatusMsg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->serverHoldStatus) {
            $res['ServerHoldStatus'] = $this->serverHoldStatus;
        }

        if (null !== $this->statusMsg) {
            $res['StatusMsg'] = $this->statusMsg;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['ServerHoldStatus'])) {
            $model->serverHoldStatus = $map['ServerHoldStatus'];
        }

        if (isset($map['StatusMsg'])) {
            $model->statusMsg = $map['StatusMsg'];
        }

        return $model;
    }
}
