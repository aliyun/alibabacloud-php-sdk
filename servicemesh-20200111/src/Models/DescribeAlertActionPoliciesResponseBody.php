<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeAlertActionPoliciesResponseBody\actionPolicyList;
use AlibabaCloud\Tea\Model;

class DescribeAlertActionPoliciesResponseBody extends Model
{
    /**
     * @var actionPolicyList[]
     */
    public $actionPolicyList;

    /**
     * @var int
     */
    public $pageTotal;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'actionPolicyList' => 'ActionPolicyList',
        'pageTotal'        => 'PageTotal',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionPolicyList) {
            $res['ActionPolicyList'] = [];
            if (null !== $this->actionPolicyList && \is_array($this->actionPolicyList)) {
                $n = 0;
                foreach ($this->actionPolicyList as $item) {
                    $res['ActionPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertActionPoliciesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionPolicyList'])) {
            if (!empty($map['ActionPolicyList'])) {
                $model->actionPolicyList = [];
                $n                       = 0;
                foreach ($map['ActionPolicyList'] as $item) {
                    $model->actionPolicyList[$n++] = null !== $item ? actionPolicyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
