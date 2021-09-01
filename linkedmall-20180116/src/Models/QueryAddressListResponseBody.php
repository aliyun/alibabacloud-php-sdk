<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressListResponseBody\addressList;
use AlibabaCloud\Tea\Model;

class QueryAddressListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var addressList[]
     */
    public $addressList;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'addressList' => 'AddressList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->addressList) {
            $res['AddressList'] = [];
            if (null !== $this->addressList && \is_array($this->addressList)) {
                $n = 0;
                foreach ($this->addressList as $item) {
                    $res['AddressList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAddressListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AddressList'])) {
            if (!empty($map['AddressList'])) {
                $model->addressList = [];
                $n                  = 0;
                foreach ($map['AddressList'] as $item) {
                    $model->addressList[$n++] = null !== $item ? addressList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
