<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListAreasResponseBody\datas;
use AlibabaCloud\Tea\Model;

class ListAreasResponseBody extends Model
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
     * @return ListAreasResponseBody
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
