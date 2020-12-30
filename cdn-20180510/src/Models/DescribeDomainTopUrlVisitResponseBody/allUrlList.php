<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainTopUrlVisitResponseBody\allUrlList\urlList;
use AlibabaCloud\Tea\Model;

class allUrlList extends Model
{
    /**
     * @var urlList[]
     */
    public $urlList;
    protected $_name = [
        'urlList' => 'UrlList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return allUrlList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
