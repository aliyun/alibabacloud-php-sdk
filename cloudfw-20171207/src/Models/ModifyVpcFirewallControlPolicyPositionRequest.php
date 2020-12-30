<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcFirewallControlPolicyPositionRequest extends Model
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
     * @var string
     */
    public $vpcFirewallId;

    /**
     * @var string
     */
    public $newOrder;

    /**
     * @var string
     */
    public $oldOrder;
    protected $_name = [
        'sourceIp'      => 'SourceIp',
        'lang'          => 'Lang',
        'vpcFirewallId' => 'VpcFirewallId',
        'newOrder'      => 'NewOrder',
        'oldOrder'      => 'OldOrder',
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
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }
        if (null !== $this->newOrder) {
            $res['NewOrder'] = $this->newOrder;
        }
        if (null !== $this->oldOrder) {
            $res['OldOrder'] = $this->oldOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpcFirewallControlPolicyPositionRequest
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
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }
        if (isset($map['NewOrder'])) {
            $model->newOrder = $map['NewOrder'];
        }
        if (isset($map['OldOrder'])) {
            $model->oldOrder = $map['OldOrder'];
        }

        return $model;
    }
}
