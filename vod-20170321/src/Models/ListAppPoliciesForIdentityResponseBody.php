<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAppPoliciesForIdentityResponseBody\appPolicyList;
use AlibabaCloud\Tea\Model;

class ListAppPoliciesForIdentityResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var appPolicyList[]
     */
    public $appPolicyList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'appPolicyList' => 'AppPolicyList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appPolicyList) {
            $res['AppPolicyList'] = [];
            if (null !== $this->appPolicyList && \is_array($this->appPolicyList)) {
                $n = 0;
                foreach ($this->appPolicyList as $item) {
                    $res['AppPolicyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppPolicyList'])) {
            if (!empty($map['AppPolicyList'])) {
                $model->appPolicyList = [];
                $n                    = 0;
                foreach ($map['AppPolicyList'] as $item) {
                    $model->appPolicyList[$n++] = null !== $item ? appPolicyList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
