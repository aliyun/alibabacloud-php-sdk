<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnConditionIPBInfoResponseBody\datas;

class DescribeCdnConditionIPBInfoResponseBody extends Model
{
    /**
     * @var datas[]
     */
    public $datas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datas' => 'Datas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->datas)) {
            Model::validateArray($this->datas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datas) {
            if (\is_array($this->datas)) {
                $res['Datas'] = [];
                $n1 = 0;
                foreach ($this->datas as $item1) {
                    $res['Datas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = [];
                $n1 = 0;
                foreach ($map['Datas'] as $item1) {
                    $model->datas[$n1] = datas::fromMap($item1);
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
