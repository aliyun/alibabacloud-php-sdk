<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\UploadFlexRulesFileForParseResponseBody;

use AlibabaCloud\Tea\Model;

class flexFwdRules extends Model
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
    public $protocol;

    /**
     * @var string
     */
    public $identity;
    protected $_name = [
        'masterIpList' => 'MasterIpList',
        'remark'       => 'Remark',
        'slaveIpList'  => 'SlaveIpList',
        'protocol'     => 'Protocol',
        'identity'     => 'Identity',
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flexFwdRules
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }

        return $model;
    }
}
