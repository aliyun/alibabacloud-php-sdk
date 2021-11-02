<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponseBody\appPolicyList;
use AlibabaCloud\Tea\Model;

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
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appPolicyList) {
            $res['AppPolicyList'] = [];
            if (null !== $this->appPolicyList && \is_array($this->appPolicyList)) {
                $n = 0;
                foreach ($this->appPolicyList as $item) {
                    $res['AppPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAppPoliciesForIdentityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppPolicyList'])) {
            if (!empty($map['AppPolicyList'])) {
                $model->appPolicyList = [];
                $n                    = 0;
                foreach ($map['AppPolicyList'] as $item) {
                    $model->appPolicyList[$n++] = null !== $item ? appPolicyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
