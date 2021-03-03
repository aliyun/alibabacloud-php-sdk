<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListIvrTrackingDetailResponseBody\ivrTrackingDetails;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListIvrTrackingDetailResponseBody\ivrTrackingDetails\list_\ivrTrackingDetail;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var ivrTrackingDetail[]
     */
    public $ivrTrackingDetail;
    protected $_name = [
        'ivrTrackingDetail' => 'IvrTrackingDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ivrTrackingDetail) {
            $res['IvrTrackingDetail'] = [];
            if (null !== $this->ivrTrackingDetail && \is_array($this->ivrTrackingDetail)) {
                $n = 0;
                foreach ($this->ivrTrackingDetail as $item) {
                    $res['IvrTrackingDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IvrTrackingDetail'])) {
            if (!empty($map['IvrTrackingDetail'])) {
                $model->ivrTrackingDetail = [];
                $n                        = 0;
                foreach ($map['IvrTrackingDetail'] as $item) {
                    $model->ivrTrackingDetail[$n++] = null !== $item ? ivrTrackingDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
