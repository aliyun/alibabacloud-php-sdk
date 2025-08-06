<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTopUrlVisitResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainTopUrlVisitResponseBody\allUrlList\urlList;

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
        if (\is_array($this->urlList)) {
            Model::validateArray($this->urlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->urlList) {
            if (\is_array($this->urlList)) {
                $res['UrlList'] = [];
                $n1 = 0;
                foreach ($this->urlList as $item1) {
                    $res['UrlList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['UrlList'])) {
            if (!empty($map['UrlList'])) {
                $model->urlList = [];
                $n1 = 0;
                foreach ($map['UrlList'] as $item1) {
                    $model->urlList[$n1] = urlList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
