<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DeleteVpcFirewallConfigureRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $memberUid;

    /**
     * @var string[]
     */
    public $vpcFirewallIdList;
    protected $_name = [
        'lang' => 'Lang',
        'memberUid' => 'MemberUid',
        'vpcFirewallIdList' => 'VpcFirewallIdList',
    ];

    public function validate()
    {
        if (\is_array($this->vpcFirewallIdList)) {
            Model::validateArray($this->vpcFirewallIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        if (null !== $this->vpcFirewallIdList) {
            if (\is_array($this->vpcFirewallIdList)) {
                $res['VpcFirewallIdList'] = [];
                $n1 = 0;
                foreach ($this->vpcFirewallIdList as $item1) {
                    $res['VpcFirewallIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        if (isset($map['VpcFirewallIdList'])) {
            if (!empty($map['VpcFirewallIdList'])) {
                $model->vpcFirewallIdList = [];
                $n1 = 0;
                foreach ($map['VpcFirewallIdList'] as $item1) {
                    $model->vpcFirewallIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
