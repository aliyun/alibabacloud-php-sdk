<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadFlexAccRulesFileForParseResponseBody;

use AlibabaCloud\Tea\Model;

class flexAccFwdRules extends Model
{
    /**
     * @var string
     */
    public $masterIpList;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $slaveIpList;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $accType;

    /**
     * @var string
     */
    public $ipList;

    /**
     * @var string
     */
    public $domainList;
    protected $_name = [
        'masterIpList' => 'MasterIpList',
        'remark'       => 'Remark',
        'slaveIpList'  => 'SlaveIpList',
        'identity'     => 'Identity',
        'protocol'     => 'Protocol',
        'accType'      => 'AccType',
        'ipList'       => 'IpList',
        'domainList'   => 'DomainList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->masterIpList) {
            $res['MasterIpList'] = $this->masterIpList;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->slaveIpList) {
            $res['SlaveIpList'] = $this->slaveIpList;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->accType) {
            $res['AccType'] = $this->accType;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flexAccFwdRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MasterIpList'])) {
            $model->masterIpList = $map['MasterIpList'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SlaveIpList'])) {
            $model->slaveIpList = $map['SlaveIpList'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['AccType'])) {
            $model->accType = $map['AccType'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }

        return $model;
    }
}
