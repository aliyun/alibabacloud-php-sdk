<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponseBody\appPolicyList;

class ListAppPoliciesForIdentityResponseBody extends Model
{
    /**
     * @var appPolicyList[]
     */
    public $appPolicyList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appPolicyList' => 'AppPolicyList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->appPolicyList)) {
            Model::validateArray($this->appPolicyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPolicyList) {
            if (\is_array($this->appPolicyList)) {
                $res['AppPolicyList'] = [];
                $n1 = 0;
                foreach ($this->appPolicyList as $item1) {
                    $res['AppPolicyList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppPolicyList'])) {
            if (!empty($map['AppPolicyList'])) {
                $model->appPolicyList = [];
                $n1 = 0;
                foreach ($map['AppPolicyList'] as $item1) {
                    $model->appPolicyList[$n1++] = appPolicyList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
