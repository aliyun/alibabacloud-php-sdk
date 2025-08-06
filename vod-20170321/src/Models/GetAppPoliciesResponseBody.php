<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAppPoliciesResponseBody\appPolicyList;

class GetAppPoliciesResponseBody extends Model
{
    /**
     * @var appPolicyList[]
     */
    public $appPolicyList;

    /**
     * @var string[]
     */
    public $nonExistPolicyNames;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appPolicyList' => 'AppPolicyList',
        'nonExistPolicyNames' => 'NonExistPolicyNames',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->appPolicyList)) {
            Model::validateArray($this->appPolicyList);
        }
        if (\is_array($this->nonExistPolicyNames)) {
            Model::validateArray($this->nonExistPolicyNames);
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
                    $res['AppPolicyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonExistPolicyNames) {
            if (\is_array($this->nonExistPolicyNames)) {
                $res['NonExistPolicyNames'] = [];
                $n1 = 0;
                foreach ($this->nonExistPolicyNames as $item1) {
                    $res['NonExistPolicyNames'][$n1] = $item1;
                    ++$n1;
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
                    $model->appPolicyList[$n1] = appPolicyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NonExistPolicyNames'])) {
            if (!empty($map['NonExistPolicyNames'])) {
                $model->nonExistPolicyNames = [];
                $n1 = 0;
                foreach ($map['NonExistPolicyNames'] as $item1) {
                    $model->nonExistPolicyNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
