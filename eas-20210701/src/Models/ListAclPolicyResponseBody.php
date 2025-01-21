<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\internetAclPolicyList;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\intranetVpcAclPolicyList;

class ListAclPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $gatewayId;
    /**
     * @var internetAclPolicyList[]
     */
    public $internetAclPolicyList;
    /**
     * @var intranetVpcAclPolicyList[]
     */
    public $intranetVpcAclPolicyList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'gatewayId'                => 'GatewayId',
        'internetAclPolicyList'    => 'InternetAclPolicyList',
        'intranetVpcAclPolicyList' => 'IntranetVpcAclPolicyList',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->internetAclPolicyList)) {
            Model::validateArray($this->internetAclPolicyList);
        }
        if (\is_array($this->intranetVpcAclPolicyList)) {
            Model::validateArray($this->intranetVpcAclPolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->internetAclPolicyList) {
            if (\is_array($this->internetAclPolicyList)) {
                $res['InternetAclPolicyList'] = [];
                $n1                           = 0;
                foreach ($this->internetAclPolicyList as $item1) {
                    $res['InternetAclPolicyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->intranetVpcAclPolicyList) {
            if (\is_array($this->intranetVpcAclPolicyList)) {
                $res['IntranetVpcAclPolicyList'] = [];
                $n1                              = 0;
                foreach ($this->intranetVpcAclPolicyList as $item1) {
                    $res['IntranetVpcAclPolicyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['InternetAclPolicyList'])) {
            if (!empty($map['InternetAclPolicyList'])) {
                $model->internetAclPolicyList = [];
                $n1                           = 0;
                foreach ($map['InternetAclPolicyList'] as $item1) {
                    $model->internetAclPolicyList[$n1++] = internetAclPolicyList::fromMap($item1);
                }
            }
        }

        if (isset($map['IntranetVpcAclPolicyList'])) {
            if (!empty($map['IntranetVpcAclPolicyList'])) {
                $model->intranetVpcAclPolicyList = [];
                $n1                              = 0;
                foreach ($map['IntranetVpcAclPolicyList'] as $item1) {
                    $model->intranetVpcAclPolicyList[$n1++] = intranetVpcAclPolicyList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
