<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightSegmentAvailableCertResponseBody\module\segmentAvailableCertList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->segmentAvailableCertList) {
            $res['segment_available_cert_list'] = [];
            if (null !== $this->segmentAvailableCertList && \is_array($this->segmentAvailableCertList)) {
                $n = 0;
                foreach ($this->segmentAvailableCertList as $item) {
                    $res['segment_available_cert_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['segment_available_cert_list'])) {
            if (!empty($map['segment_available_cert_list'])) {
                $model->segmentAvailableCertList = [];
                $n                               = 0;
                foreach ($map['segment_available_cert_list'] as $item) {
                    $model->segmentAvailableCertList[$n++] = null !== $item ? segmentAvailableCertList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
