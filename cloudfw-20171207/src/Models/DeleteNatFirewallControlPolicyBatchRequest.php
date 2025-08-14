<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DeleteNatFirewallControlPolicyBatchRequest extends Model
{
    /**
     * @var string[]
     */
    public $aclUuidList;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'aclUuidList' => 'AclUuidList',
        'direction' => 'Direction',
        'lang' => 'Lang',
        'natGatewayId' => 'NatGatewayId',
    ];

    public function validate()
    {
        if (\is_array($this->aclUuidList)) {
            Model::validateArray($this->aclUuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclUuidList) {
            if (\is_array($this->aclUuidList)) {
                $res['AclUuidList'] = [];
                $n1 = 0;
                foreach ($this->aclUuidList as $item1) {
                    $res['AclUuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
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
        if (isset($map['AclUuidList'])) {
            if (!empty($map['AclUuidList'])) {
                $model->aclUuidList = [];
                $n1 = 0;
                foreach ($map['AclUuidList'] as $item1) {
                    $model->aclUuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
