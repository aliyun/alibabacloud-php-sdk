<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListAuditSecurityIpResponseBody\securityIpList;
use AlibabaCloud\Tea\Model;

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
        'requestId'      => 'RequestId',
        'securityIpList' => 'SecurityIpList',
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
        if (null !== $this->securityIpList) {
            $res['SecurityIpList'] = [];
            if (null !== $this->securityIpList && \is_array($this->securityIpList)) {
                $n = 0;
                foreach ($this->securityIpList as $item) {
                    $res['SecurityIpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuditSecurityIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityIpList'])) {
            if (!empty($map['SecurityIpList'])) {
                $model->securityIpList = [];
                $n                     = 0;
                foreach ($map['SecurityIpList'] as $item) {
                    $model->securityIpList[$n++] = null !== $item ? securityIpList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
