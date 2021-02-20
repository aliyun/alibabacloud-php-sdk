<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopUrlResponseBody\urlList;
use AlibabaCloud\Tea\Model;

class DescribeDomainViewTopUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @return DescribeDomainViewTopUrlResponseBody
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
