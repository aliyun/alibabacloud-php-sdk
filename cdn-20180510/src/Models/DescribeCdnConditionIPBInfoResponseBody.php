<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnConditionIPBInfoResponseBody\datas;
use AlibabaCloud\Tea\Model;

class DescribeCdnConditionIPBInfoResponseBody extends Model
{
    /**
     * @description The data that is returned.
     *
     * @var datas[]
     */
    public $datas;

    /**
     * @description The request ID.
     *
     * @example 2C4AA72D-8C00-1113-BD68-8BC4E3CF4FF6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datas'     => 'Datas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datas) {
            $res['Datas'] = [];
            if (null !== $this->datas && \is_array($this->datas)) {
                $n = 0;
                foreach ($this->datas as $item) {
                    $res['Datas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnConditionIPBInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Datas'])) {
            if (!empty($map['Datas'])) {
                $model->datas = [];
                $n            = 0;
                foreach ($map['Datas'] as $item) {
                    $model->datas[$n++] = null !== $item ? datas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
