<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\barCodeInfo\barCodeDetails;

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
        'barCodeCount' => 'BarCodeCount',
        'barCodeDetails' => 'BarCodeDetails',
    ];

    public function validate()
    {
        if (\is_array($this->barCodeDetails)) {
            Model::validateArray($this->barCodeDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->barCodeCount) {
            $res['BarCodeCount'] = $this->barCodeCount;
        }

        if (null !== $this->barCodeDetails) {
            if (\is_array($this->barCodeDetails)) {
                $res['BarCodeDetails'] = [];
                $n1 = 0;
                foreach ($this->barCodeDetails as $item1) {
                    $res['BarCodeDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['BarCodeCount'])) {
            $model->barCodeCount = $map['BarCodeCount'];
        }

        if (isset($map['BarCodeDetails'])) {
            if (!empty($map['BarCodeDetails'])) {
                $model->barCodeDetails = [];
                $n1 = 0;
                foreach ($map['BarCodeDetails'] as $item1) {
                    $model->barCodeDetails[$n1++] = barCodeDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
