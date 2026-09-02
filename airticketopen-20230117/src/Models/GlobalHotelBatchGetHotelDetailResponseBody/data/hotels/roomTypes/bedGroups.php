<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponseBody\data\hotels\roomTypes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelBatchGetHotelDetailResponseBody\data\hotels\roomTypes\bedGroups\bedInfos;

class bedGroups extends Model
{
    /**
     * @var bedInfos[]
     */
    public $bedInfos;
    protected $_name = [
        'bedInfos' => 'BedInfos',
    ];

    public function validate()
    {
        if (\is_array($this->bedInfos)) {
            Model::validateArray($this->bedInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bedInfos) {
            if (\is_array($this->bedInfos)) {
                $res['BedInfos'] = [];
                $n1 = 0;
                foreach ($this->bedInfos as $item1) {
                    $res['BedInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BedInfos'])) {
            if (!empty($map['BedInfos'])) {
                $model->bedInfos = [];
                $n1 = 0;
                foreach ($map['BedInfos'] as $item1) {
                    $model->bedInfos[$n1] = bedInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
