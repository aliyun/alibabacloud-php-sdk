<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\internetAclPolicyList;
use AlibabaCloud\SDK\Eas\V20210701\Models\ListAclPolicyResponseBody\intranetVpcAclPolicyList;
use AlibabaCloud\Tea\Model;

class ListAclPolicyResponseBody extends Model
{
    /**
     * @example gw-1uhcqmsc7x22******
     *
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
     * @example 40325405-579C-4D82****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->internetAclPolicyList) {
            $res['InternetAclPolicyList'] = [];
            if (null !== $this->internetAclPolicyList && \is_array($this->internetAclPolicyList)) {
                $n = 0;
                foreach ($this->internetAclPolicyList as $item) {
                    $res['InternetAclPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intranetVpcAclPolicyList) {
            $res['IntranetVpcAclPolicyList'] = [];
            if (null !== $this->intranetVpcAclPolicyList && \is_array($this->intranetVpcAclPolicyList)) {
                $n = 0;
                foreach ($this->intranetVpcAclPolicyList as $item) {
                    $res['IntranetVpcAclPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAclPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['InternetAclPolicyList'])) {
            if (!empty($map['InternetAclPolicyList'])) {
                $model->internetAclPolicyList = [];
                $n                            = 0;
                foreach ($map['InternetAclPolicyList'] as $item) {
                    $model->internetAclPolicyList[$n++] = null !== $item ? internetAclPolicyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IntranetVpcAclPolicyList'])) {
            if (!empty($map['IntranetVpcAclPolicyList'])) {
                $model->intranetVpcAclPolicyList = [];
                $n                               = 0;
                foreach ($map['IntranetVpcAclPolicyList'] as $item) {
                    $model->intranetVpcAclPolicyList[$n++] = null !== $item ? intranetVpcAclPolicyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
