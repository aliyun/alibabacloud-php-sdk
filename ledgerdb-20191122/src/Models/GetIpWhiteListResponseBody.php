<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class GetIpWhiteListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ipList;

    /**
     * @var string
     */
    public $ledgerId;
    protected $_name = [
        'requestId' => 'RequestId',
        'ipList'    => 'IpList',
        'ledgerId'  => 'LedgerId',
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
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIpWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }

        return $model;
    }
}
