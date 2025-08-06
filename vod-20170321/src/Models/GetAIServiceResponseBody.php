<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIServiceResponseBody\AIList;

class GetAIServiceResponseBody extends Model
{
    /**
     * @var AIList[]
     */
    public $AIList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIList' => 'AIList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->AIList)) {
            Model::validateArray($this->AIList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIList) {
            if (\is_array($this->AIList)) {
                $res['AIList'] = [];
                $n1 = 0;
                foreach ($this->AIList as $item1) {
                    $res['AIList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIList'])) {
            if (!empty($map['AIList'])) {
                $model->AIList = [];
                $n1 = 0;
                foreach ($map['AIList'] as $item1) {
                    $model->AIList[$n1] = AIList::fromMap($item1);
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
