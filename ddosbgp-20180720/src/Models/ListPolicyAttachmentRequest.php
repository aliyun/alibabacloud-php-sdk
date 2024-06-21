<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentRequest\ipPortProtocolList;
use AlibabaCloud\Tea\Model;

class ListPolicyAttachmentRequest extends Model
{
    /**
     * @var ipPortProtocolList[]
     */
    public $ipPortProtocolList;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example f38f6520-92b7-451e-b520-9ab3********
     *
     * @var string
     */
    public $policyId;

    /**
     * @example l3
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'ipPortProtocolList' => 'IpPortProtocolList',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'policyId'           => 'PolicyId',
        'policyType'         => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipPortProtocolList) {
            $res['IpPortProtocolList'] = [];
            if (null !== $this->ipPortProtocolList && \is_array($this->ipPortProtocolList)) {
                $n = 0;
                foreach ($this->ipPortProtocolList as $item) {
                    $res['IpPortProtocolList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyAttachmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpPortProtocolList'])) {
            if (!empty($map['IpPortProtocolList'])) {
                $model->ipPortProtocolList = [];
                $n                         = 0;
                foreach ($map['IpPortProtocolList'] as $item) {
                    $model->ipPortProtocolList[$n++] = null !== $item ? ipPortProtocolList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
