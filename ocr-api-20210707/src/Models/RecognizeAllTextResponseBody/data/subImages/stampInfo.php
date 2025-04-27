<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails;

class stampInfo extends Model
{
    /**
     * @var int
     */
    public $stampCount;

    /**
     * @var stampDetails[]
     */
    public $stampDetails;
    protected $_name = [
        'stampCount' => 'StampCount',
        'stampDetails' => 'StampDetails',
    ];

    public function validate()
    {
        if (\is_array($this->stampDetails)) {
            Model::validateArray($this->stampDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stampCount) {
            $res['StampCount'] = $this->stampCount;
        }

        if (null !== $this->stampDetails) {
            if (\is_array($this->stampDetails)) {
                $res['StampDetails'] = [];
                $n1 = 0;
                foreach ($this->stampDetails as $item1) {
                    $res['StampDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StampCount'])) {
            $model->stampCount = $map['StampCount'];
        }

        if (isset($map['StampDetails'])) {
            if (!empty($map['StampDetails'])) {
                $model->stampDetails = [];
                $n1 = 0;
                foreach ($map['StampDetails'] as $item1) {
                    $model->stampDetails[$n1++] = stampDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
