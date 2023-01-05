<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureByListResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryDevicePictureByListResponseBody\data\picData;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var picData[]
     */
    public $picData;
    protected $_name = [
        'picData' => 'picData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picData) {
            $res['picData'] = [];
            if (null !== $this->picData && \is_array($this->picData)) {
                $n = 0;
                foreach ($this->picData as $item) {
                    $res['picData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['picData'])) {
            if (!empty($map['picData'])) {
                $model->picData = [];
                $n              = 0;
                foreach ($map['picData'] as $item) {
                    $model->picData[$n++] = null !== $item ? picData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
