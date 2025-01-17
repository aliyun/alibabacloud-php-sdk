<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models;

use AlibabaCloud\SDK\MarketplaceIntl\V20221230\Models\PushMeteringDataRequest\meteringData;
use AlibabaCloud\Tea\Model;

class PushMeteringDataRequest extends Model
{
    /**
     * @example 2023-01-11 10:31:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @var meteringData[]
     */
    public $meteringData;
    protected $_name = [
        'gmtCreate'    => 'GmtCreate',
        'meteringData' => 'MeteringData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->meteringData) {
            $res['MeteringData'] = [];
            if (null !== $this->meteringData && \is_array($this->meteringData)) {
                $n = 0;
                foreach ($this->meteringData as $item) {
                    $res['MeteringData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushMeteringDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['MeteringData'])) {
            if (!empty($map['MeteringData'])) {
                $model->meteringData = [];
                $n                   = 0;
                foreach ($map['MeteringData'] as $item) {
                    $model->meteringData[$n++] = null !== $item ? meteringData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
