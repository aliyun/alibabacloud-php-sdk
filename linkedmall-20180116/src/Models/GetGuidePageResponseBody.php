<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetGuidePageResponseBody\miniShopInfo;
use AlibabaCloud\Tea\Model;

class GetGuidePageResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var miniShopInfo[]
     */
    public $miniShopInfo;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'miniShopInfo' => 'MiniShopInfo',
        'code'         => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->miniShopInfo) {
            $res['MiniShopInfo'] = [];
            if (null !== $this->miniShopInfo && \is_array($this->miniShopInfo)) {
                $n = 0;
                foreach ($this->miniShopInfo as $item) {
                    $res['MiniShopInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGuidePageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MiniShopInfo'])) {
            if (!empty($map['MiniShopInfo'])) {
                $model->miniShopInfo = [];
                $n                   = 0;
                foreach ($map['MiniShopInfo'] as $item) {
                    $model->miniShopInfo[$n++] = null !== $item ? miniShopInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
