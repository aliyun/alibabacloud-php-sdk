<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewTopCostTimeResponseBody\urlList;

class DescribeDomainViewTopCostTimeResponseBody extends Model
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
        'urlList' => 'UrlList',
    ];

    public function validate()
    {
        if (\is_array($this->urlList)) {
            Model::validateArray($this->urlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->urlList) {
            if (\is_array($this->urlList)) {
                $res['UrlList'] = [];
                $n1 = 0;
                foreach ($this->urlList as $item1) {
                    $res['UrlList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['UrlList'])) {
            if (!empty($map['UrlList'])) {
                $model->urlList = [];
                $n1 = 0;
                foreach ($map['UrlList'] as $item1) {
                    $model->urlList[$n1++] = urlList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
