<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIImageJobsResponseBody\AIImageJobList;

class GetAIImageJobsResponseBody extends Model
{
    /**
     * @var AIImageJobList[]
     */
    public $AIImageJobList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIImageJobList' => 'AIImageJobList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->AIImageJobList)) {
            Model::validateArray($this->AIImageJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIImageJobList) {
            if (\is_array($this->AIImageJobList)) {
                $res['AIImageJobList'] = [];
                $n1 = 0;
                foreach ($this->AIImageJobList as $item1) {
                    $res['AIImageJobList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIImageJobList'])) {
            if (!empty($map['AIImageJobList'])) {
                $model->AIImageJobList = [];
                $n1 = 0;
                foreach ($map['AIImageJobList'] as $item1) {
                    $model->AIImageJobList[$n1] = AIImageJobList::fromMap($item1);
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
