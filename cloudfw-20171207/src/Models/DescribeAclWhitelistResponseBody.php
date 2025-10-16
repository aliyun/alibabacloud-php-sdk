<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeAclWhitelistResponseBody extends Model
{
    /**
     * @var bool
     */
    public $domainGroupUseDns;

    /**
     * @var bool
     */
    public $natDomainGroupUseDns;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $supportMessageType;

    /**
     * @var bool
     */
    public $vpcDomainGroupUseDns;
    protected $_name = [
        'domainGroupUseDns' => 'DomainGroupUseDns',
        'natDomainGroupUseDns' => 'NatDomainGroupUseDns',
        'requestId' => 'RequestId',
        'supportMessageType' => 'SupportMessageType',
        'vpcDomainGroupUseDns' => 'VpcDomainGroupUseDns',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainGroupUseDns) {
            $res['DomainGroupUseDns'] = $this->domainGroupUseDns;
        }

        if (null !== $this->natDomainGroupUseDns) {
            $res['NatDomainGroupUseDns'] = $this->natDomainGroupUseDns;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->supportMessageType) {
            $res['SupportMessageType'] = $this->supportMessageType;
        }

        if (null !== $this->vpcDomainGroupUseDns) {
            $res['VpcDomainGroupUseDns'] = $this->vpcDomainGroupUseDns;
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
        if (isset($map['DomainGroupUseDns'])) {
            $model->domainGroupUseDns = $map['DomainGroupUseDns'];
        }

        if (isset($map['NatDomainGroupUseDns'])) {
            $model->natDomainGroupUseDns = $map['NatDomainGroupUseDns'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SupportMessageType'])) {
            $model->supportMessageType = $map['SupportMessageType'];
        }

        if (isset($map['VpcDomainGroupUseDns'])) {
            $model->vpcDomainGroupUseDns = $map['VpcDomainGroupUseDns'];
        }

        return $model;
    }
}
