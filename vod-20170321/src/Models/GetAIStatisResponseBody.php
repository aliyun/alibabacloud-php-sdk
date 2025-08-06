<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIStatisResponseBody\AIStatisList;

class GetAIStatisResponseBody extends Model
{
    /**
     * @var AIStatisList[]
     */
    public $AIStatisList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIStatisList' => 'AIStatisList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->AIStatisList)) {
            Model::validateArray($this->AIStatisList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIStatisList) {
            if (\is_array($this->AIStatisList)) {
                $res['AIStatisList'] = [];
                $n1 = 0;
                foreach ($this->AIStatisList as $item1) {
                    $res['AIStatisList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AIStatisList'])) {
            if (!empty($map['AIStatisList'])) {
                $model->AIStatisList = [];
                $n1 = 0;
                foreach ($map['AIStatisList'] as $item1) {
                    $model->AIStatisList[$n1] = AIStatisList::fromMap($item1);
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
