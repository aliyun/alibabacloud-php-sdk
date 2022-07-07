<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class BatchCopyVpcFirewallControlPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $sourceVpcFirewallId;

    /**
     * @var string
     */
    public $targetVpcFirewallId;
    protected $_name = [
        'lang'                => 'Lang',
        'sourceIp'            => 'SourceIp',
        'sourceVpcFirewallId' => 'SourceVpcFirewallId',
        'targetVpcFirewallId' => 'TargetVpcFirewallId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->sourceVpcFirewallId) {
            $res['SourceVpcFirewallId'] = $this->sourceVpcFirewallId;
        }
        if (null !== $this->targetVpcFirewallId) {
            $res['TargetVpcFirewallId'] = $this->targetVpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCopyVpcFirewallControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SourceVpcFirewallId'])) {
            $model->sourceVpcFirewallId = $map['SourceVpcFirewallId'];
        }
        if (isset($map['TargetVpcFirewallId'])) {
            $model->targetVpcFirewallId = $map['TargetVpcFirewallId'];
        }

        return $model;
    }
}
