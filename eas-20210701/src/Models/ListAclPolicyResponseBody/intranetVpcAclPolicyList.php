<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\intranetVpcAclPolicyList\intranetAclPolicyList;
use AlibabaCloud\Tea\Model;

class intranetVpcAclPolicyList extends Model
{
    /**
     * @var intranetAclPolicyList[]
     */
    public $intranetAclPolicyList;

    /**
     * @example vpc-uf66uio7md****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'intranetAclPolicyList' => 'IntranetAclPolicyList',
        'vpcId'                 => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intranetAclPolicyList) {
            $res['IntranetAclPolicyList'] = [];
            if (null !== $this->intranetAclPolicyList && \is_array($this->intranetAclPolicyList)) {
                $n = 0;
                foreach ($this->intranetAclPolicyList as $item) {
                    $res['IntranetAclPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intranetVpcAclPolicyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntranetAclPolicyList'])) {
            if (!empty($map['IntranetAclPolicyList'])) {
                $model->intranetAclPolicyList = [];
                $n                            = 0;
                foreach ($map['IntranetAclPolicyList'] as $item) {
                    $model->intranetAclPolicyList[$n++] = null !== $item ? intranetAclPolicyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
