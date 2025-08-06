<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIImageInfoResponseBody\AIImageInfoList;

class ListAIImageInfoResponseBody extends Model
{
    /**
     * @var AIImageInfoList[]
     */
    public $AIImageInfoList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIImageInfoList' => 'AIImageInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->AIImageInfoList)) {
            Model::validateArray($this->AIImageInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIImageInfoList) {
            if (\is_array($this->AIImageInfoList)) {
                $res['AIImageInfoList'] = [];
                $n1 = 0;
                foreach ($this->AIImageInfoList as $item1) {
                    $res['AIImageInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AIImageInfoList'])) {
            if (!empty($map['AIImageInfoList'])) {
                $model->AIImageInfoList = [];
                $n1 = 0;
                foreach ($map['AIImageInfoList'] as $item1) {
                    $model->AIImageInfoList[$n1] = AIImageInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
