<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\ListTrademarkSbjKeyResponseBody\tmSbjKeyInfo;
use AlibabaCloud\Tea\Model;

class ListTrademarkSbjKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tmSbjKeyInfo[]
     */
    public $tmSbjKeyInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'tmSbjKeyInfo' => 'TmSbjKeyInfo',
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
        if (null !== $this->tmSbjKeyInfo) {
            $res['TmSbjKeyInfo'] = [];
            if (null !== $this->tmSbjKeyInfo && \is_array($this->tmSbjKeyInfo)) {
                $n = 0;
                foreach ($this->tmSbjKeyInfo as $item) {
                    $res['TmSbjKeyInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrademarkSbjKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TmSbjKeyInfo'])) {
            if (!empty($map['TmSbjKeyInfo'])) {
                $model->tmSbjKeyInfo = [];
                $n                   = 0;
                foreach ($map['TmSbjKeyInfo'] as $item) {
                    $model->tmSbjKeyInfo[$n++] = null !== $item ? tmSbjKeyInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
