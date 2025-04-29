<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponseBody\module\segmentAvailableCertList;

class module extends Model
{
    /**
     * @var segmentAvailableCertList[]
     */
    public $segmentAvailableCertList;
    protected $_name = [
        'segmentAvailableCertList' => 'segment_available_cert_list',
    ];

    public function validate()
    {
        if (\is_array($this->segmentAvailableCertList)) {
            Model::validateArray($this->segmentAvailableCertList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->segmentAvailableCertList) {
            if (\is_array($this->segmentAvailableCertList)) {
                $res['segment_available_cert_list'] = [];
                $n1 = 0;
                foreach ($this->segmentAvailableCertList as $item1) {
                    $res['segment_available_cert_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['segment_available_cert_list'])) {
            if (!empty($map['segment_available_cert_list'])) {
                $model->segmentAvailableCertList = [];
                $n1 = 0;
                foreach ($map['segment_available_cert_list'] as $item1) {
                    $model->segmentAvailableCertList[$n1++] = segmentAvailableCertList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
