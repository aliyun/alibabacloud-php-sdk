<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlexAccFwdRuleRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $esnBizId;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $protocolEx;

    /**
     * @var string
     */
    public $ipList;

    /**
     * @var string
     */
    public $domainList;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'esnBizId'   => 'EsnBizId',
        'identity'   => 'Identity',
        'protocolEx' => 'ProtocolEx',
        'ipList'     => 'IpList',
        'domainList' => 'DomainList',
        'remark'     => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->protocolEx) {
            $res['ProtocolEx'] = $this->protocolEx;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlexAccFwdRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['ProtocolEx'])) {
            $model->protocolEx = $map['ProtocolEx'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
