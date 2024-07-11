<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortConnsListResponseBody\connsList;
use AlibabaCloud\Tea\Model;

class DescribePortConnsListResponseBody extends Model
{
    /**
     * @description Details about the connections established over the port.
     *
     * @var connsList[]
     */
    public $connsList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 6D48AED0-41DB-5D9B-B484-3B6AAD312AD1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connsList' => 'ConnsList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connsList) {
            $res['ConnsList'] = [];
            if (null !== $this->connsList && \is_array($this->connsList)) {
                $n = 0;
                foreach ($this->connsList as $item) {
                    $res['ConnsList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePortConnsListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnsList'])) {
            if (!empty($map['ConnsList'])) {
                $model->connsList = [];
                $n                = 0;
                foreach ($map['ConnsList'] as $item) {
                    $model->connsList[$n++] = null !== $item ? connsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
