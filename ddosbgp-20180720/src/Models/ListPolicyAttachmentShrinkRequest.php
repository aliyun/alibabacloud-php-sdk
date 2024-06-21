<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class ListPolicyAttachmentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ipPortProtocolListShrink;

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
        'ipPortProtocolListShrink' => 'IpPortProtocolList',
        'pageNo'                   => 'PageNo',
        'pageSize'                 => 'PageSize',
        'policyId'                 => 'PolicyId',
        'policyType'               => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipPortProtocolListShrink) {
            $res['IpPortProtocolList'] = $this->ipPortProtocolListShrink;
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
     * @return ListPolicyAttachmentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpPortProtocolList'])) {
            $model->ipPortProtocolListShrink = $map['IpPortProtocolList'];
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
