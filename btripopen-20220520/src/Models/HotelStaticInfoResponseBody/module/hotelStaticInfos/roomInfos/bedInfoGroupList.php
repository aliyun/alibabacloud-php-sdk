<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\roomInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos\roomInfos\bedInfoGroupList\bedInfos;

class bedInfoGroupList extends Model
{
    /**
     * @var bedInfos[]
     */
    public $bedInfos;
    protected $_name = [
        'bedInfos' => 'bed_Infos',
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
                $res['bed_Infos'] = [];
                $n1 = 0;
                foreach ($this->bedInfos as $item1) {
                    $res['bed_Infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['bed_Infos'])) {
            if (!empty($map['bed_Infos'])) {
                $model->bedInfos = [];
                $n1 = 0;
                foreach ($map['bed_Infos'] as $item1) {
                    $model->bedInfos[$n1] = bedInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
