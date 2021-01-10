<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var resultInfo[]
     */
    public $resultInfo;
    protected $_name = [
        'resultInfo' => 'ResultInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultInfo) {
            $res['ResultInfo'] = [];
            if (null !== $this->resultInfo && \is_array($this->resultInfo)) {
                $n = 0;
                foreach ($this->resultInfo as $item) {
                    $res['ResultInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultInfo'])) {
            if (!empty($map['ResultInfo'])) {
                $model->resultInfo = [];
                $n                 = 0;
                foreach ($map['ResultInfo'] as $item) {
                    $model->resultInfo[$n++] = null !== $item ? resultInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
