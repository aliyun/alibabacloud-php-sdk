<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ListPolicyAttachmentRequest\ipPortProtocolList;

class ListPolicyAttachmentRequest extends Model
{
    /**
     * @var ipPortProtocolList[]
     */
    public $ipPortProtocolList;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $portVersion;
    protected $_name = [
        'ipPortProtocolList' => 'IpPortProtocolList',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'policyId' => 'PolicyId',
        'policyType' => 'PolicyType',
        'portVersion' => 'PortVersion',
    ];

    public function validate()
    {
        if (\is_array($this->ipPortProtocolList)) {
            Model::validateArray($this->ipPortProtocolList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipPortProtocolList) {
            if (\is_array($this->ipPortProtocolList)) {
                $res['IpPortProtocolList'] = [];
                $n1 = 0;
                foreach ($this->ipPortProtocolList as $item1) {
                    $res['IpPortProtocolList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->portVersion) {
            $res['PortVersion'] = $this->portVersion;
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
        if (isset($map['IpPortProtocolList'])) {
            if (!empty($map['IpPortProtocolList'])) {
                $model->ipPortProtocolList = [];
                $n1 = 0;
                foreach ($map['IpPortProtocolList'] as $item1) {
                    $model->ipPortProtocolList[$n1] = ipPortProtocolList::fromMap($item1);
                    ++$n1;
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

        if (isset($map['PortVersion'])) {
            $model->portVersion = $map['PortVersion'];
        }

        return $model;
    }
}
