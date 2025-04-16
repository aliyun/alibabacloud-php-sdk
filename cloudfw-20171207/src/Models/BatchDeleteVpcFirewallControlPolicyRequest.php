<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class BatchDeleteVpcFirewallControlPolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $aclUuidList;

    /**
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclUuidList' => 'AclUuidList',
        'vpcFirewallId' => 'VpcFirewallId',
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
                    $res['AclUuidList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
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
                    $model->aclUuidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
