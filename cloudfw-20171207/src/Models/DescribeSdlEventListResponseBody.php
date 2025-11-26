<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlEventListResponseBody\sdlEventDetailList;

class DescribeSdlEventListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sdlEventDetailList[]
     */
    public $sdlEventDetailList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'sdlEventDetailList' => 'SdlEventDetailList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->sdlEventDetailList)) {
            Model::validateArray($this->sdlEventDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sdlEventDetailList) {
            if (\is_array($this->sdlEventDetailList)) {
                $res['SdlEventDetailList'] = [];
                $n1 = 0;
                foreach ($this->sdlEventDetailList as $item1) {
                    $res['SdlEventDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['SdlEventDetailList'])) {
            if (!empty($map['SdlEventDetailList'])) {
                $model->sdlEventDetailList = [];
                $n1 = 0;
                foreach ($map['SdlEventDetailList'] as $item1) {
                    $model->sdlEventDetailList[$n1] = sdlEventDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
