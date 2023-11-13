<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopCostTimeResponseBody\urlList;
use AlibabaCloud\Tea\Model;

class DescribeDomainViewTopCostTimeResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The URLs which require the longest time to respond to requests.
     *
     * @var urlList[]
     */
    public $urlList;
    protected $_name = [
        'requestId' => 'RequestId',
        'urlList'   => 'UrlList',
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
        if (null !== $this->urlList) {
            $res['UrlList'] = [];
            if (null !== $this->urlList && \is_array($this->urlList)) {
                $n = 0;
                foreach ($this->urlList as $item) {
                    $res['UrlList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainViewTopCostTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UrlList'])) {
            if (!empty($map['UrlList'])) {
                $model->urlList = [];
                $n              = 0;
                foreach ($map['UrlList'] as $item) {
                    $model->urlList[$n++] = null !== $item ? urlList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
