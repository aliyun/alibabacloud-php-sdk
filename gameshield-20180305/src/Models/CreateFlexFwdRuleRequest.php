<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class CreateFlexFwdRuleRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

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
    public $masterIpList;

    /**
     * @var string
     */
    public $slaveIpList;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'sourceIp'     => 'SourceIp',
        'lang'         => 'Lang',
        'bizId'        => 'BizId',
        'identity'     => 'Identity',
        'masterIpList' => 'MasterIpList',
        'slaveIpList'  => 'SlaveIpList',
        'remark'       => 'Remark',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }
        if (null !== $this->masterIpList) {
            $res['MasterIpList'] = $this->masterIpList;
        }
        if (null !== $this->slaveIpList) {
            $res['SlaveIpList'] = $this->slaveIpList;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlexFwdRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }
        if (isset($map['MasterIpList'])) {
            $model->masterIpList = $map['MasterIpList'];
        }
        if (isset($map['SlaveIpList'])) {
            $model->slaveIpList = $map['SlaveIpList'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
