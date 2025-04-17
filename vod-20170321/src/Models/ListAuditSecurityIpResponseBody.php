<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponseBody\securityIpList;

class ListAuditSecurityIpResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityIpList[]
     */
    public $securityIpList;
    protected $_name = [
        'requestId' => 'RequestId',
        'securityIpList' => 'SecurityIpList',
    ];

    public function validate()
    {
        if (\is_array($this->securityIpList)) {
            Model::validateArray($this->securityIpList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityIpList) {
            if (\is_array($this->securityIpList)) {
                $res['SecurityIpList'] = [];
                $n1 = 0;
                foreach ($this->securityIpList as $item1) {
                    $res['SecurityIpList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SecurityIpList'])) {
            if (!empty($map['SecurityIpList'])) {
                $model->securityIpList = [];
                $n1 = 0;
                foreach ($map['SecurityIpList'] as $item1) {
                    $model->securityIpList[$n1++] = securityIpList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
