<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagDropTopNResponseBody\dropTopN;
use AlibabaCloud\Tea\Model;

class DescribeSagDropTopNResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dropTopN[]
     */
    public $dropTopN;
    protected $_name = [
        'requestId' => 'RequestId',
        'dropTopN'  => 'DropTopN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dropTopN) {
            $res['DropTopN'] = [];
            if (null !== $this->dropTopN && \is_array($this->dropTopN)) {
                $n = 0;
                foreach ($this->dropTopN as $item) {
                    $res['DropTopN'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagDropTopNResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DropTopN'])) {
            if (!empty($map['DropTopN'])) {
                $model->dropTopN = [];
                $n               = 0;
                foreach ($map['DropTopN'] as $item) {
                    $model->dropTopN[$n++] = null !== $item ? dropTopN::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
