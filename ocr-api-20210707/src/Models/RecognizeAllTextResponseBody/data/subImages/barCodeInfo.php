<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo\barCodeDetails;
use AlibabaCloud\Tea\Model;

class barCodeInfo extends Model
{
    /**
     * @var int
     */
    public $barCodeCount;

    /**
     * @var barCodeDetails[]
     */
    public $barCodeDetails;
    protected $_name = [
        'barCodeCount'   => 'BarCodeCount',
        'barCodeDetails' => 'BarCodeDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->barCodeCount) {
            $res['BarCodeCount'] = $this->barCodeCount;
        }
        if (null !== $this->barCodeDetails) {
            $res['BarCodeDetails'] = [];
            if (null !== $this->barCodeDetails && \is_array($this->barCodeDetails)) {
                $n = 0;
                foreach ($this->barCodeDetails as $item) {
                    $res['BarCodeDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return barCodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BarCodeCount'])) {
            $model->barCodeCount = $map['BarCodeCount'];
        }
        if (isset($map['BarCodeDetails'])) {
            if (!empty($map['BarCodeDetails'])) {
                $model->barCodeDetails = [];
                $n                     = 0;
                foreach ($map['BarCodeDetails'] as $item) {
                    $model->barCodeDetails[$n++] = null !== $item ? barCodeDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
