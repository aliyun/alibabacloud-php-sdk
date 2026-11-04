<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListIvrTrackingDetailResponseBody\ivrTrackingDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListIvrTrackingDetailResponseBody\ivrTrackingDetails\list_\ivrTrackingDetail;

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
        if (\is_array($this->ivrTrackingDetail)) {
            Model::validateArray($this->ivrTrackingDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ivrTrackingDetail) {
            if (\is_array($this->ivrTrackingDetail)) {
                $res['IvrTrackingDetail'] = [];
                $n1 = 0;
                foreach ($this->ivrTrackingDetail as $item1) {
                    $res['IvrTrackingDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['IvrTrackingDetail'])) {
            if (!empty($map['IvrTrackingDetail'])) {
                $model->ivrTrackingDetail = [];
                $n1 = 0;
                foreach ($map['IvrTrackingDetail'] as $item1) {
                    $model->ivrTrackingDetail[$n1] = ivrTrackingDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
