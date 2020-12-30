<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlexAccFwdRuleV2Request extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $bizId;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $ipList;

    /**
     * @var string
     */
    public $protocolEx;

    /**
     * @var string
     */
    public $domainList;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $masterIpList;

    /**
     * @var string
     */
    public $slaveIpList;

    /**
     * @var int
     */
    public $accType;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'bizId'        => 'BizId',
        'identity'     => 'Identity',
        'ipList'       => 'IpList',
        'protocolEx'   => 'ProtocolEx',
        'domainList'   => 'DomainList',
        'remark'       => 'Remark',
        'masterIpList' => 'MasterIpList',
        'slaveIpList'  => 'SlaveIpList',
        'accType'      => 'AccType',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->protocolEx) {
            $res['ProtocolEx'] = $this->protocolEx;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->masterIpList) {
            $res['MasterIpList'] = $this->masterIpList;
        }
        if (null !== $this->slaveIpList) {
            $res['SlaveIpList'] = $this->slaveIpList;
        }
        if (null !== $this->accType) {
            $res['AccType'] = $this->accType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlexAccFwdRuleV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }
        if (isset($map['ProtocolEx'])) {
            $model->protocolEx = $map['ProtocolEx'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['MasterIpList'])) {
            $model->masterIpList = $map['MasterIpList'];
        }
        if (isset($map['SlaveIpList'])) {
            $model->slaveIpList = $map['SlaveIpList'];
        }
        if (isset($map['AccType'])) {
            $model->accType = $map['AccType'];
        }

        return $model;
    }
}
