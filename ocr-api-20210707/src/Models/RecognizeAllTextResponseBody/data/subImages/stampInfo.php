<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\stampInfo\stampDetails;
use AlibabaCloud\Tea\Model;

class stampInfo extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $stampCount;

    /**
     * @var stampDetails[]
     */
    public $stampDetails;
    protected $_name = [
        'stampCount'   => 'StampCount',
        'stampDetails' => 'StampDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stampCount) {
            $res['StampCount'] = $this->stampCount;
        }
        if (null !== $this->stampDetails) {
            $res['StampDetails'] = [];
            if (null !== $this->stampDetails && \is_array($this->stampDetails)) {
                $n = 0;
                foreach ($this->stampDetails as $item) {
                    $res['StampDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stampInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StampCount'])) {
            $model->stampCount = $map['StampCount'];
        }
        if (isset($map['StampDetails'])) {
            if (!empty($map['StampDetails'])) {
                $model->stampDetails = [];
                $n                   = 0;
                foreach ($map['StampDetails'] as $item) {
                    $model->stampDetails[$n++] = null !== $item ? stampDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
