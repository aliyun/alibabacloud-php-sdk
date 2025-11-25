<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsRegionListResponseBody\data\regionDo;

class data extends Model
{
    /**
     * @var regionDo[]
     */
    public $regionDo;
    protected $_name = [
        'regionDo' => 'RegionDo',
    ];

    public function validate()
    {
        if (\is_array($this->regionDo)) {
            Model::validateArray($this->regionDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionDo) {
            if (\is_array($this->regionDo)) {
                $res['RegionDo'] = [];
                $n1 = 0;
                foreach ($this->regionDo as $item1) {
                    $res['RegionDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionDo'])) {
            if (!empty($map['RegionDo'])) {
                $model->regionDo = [];
                $n1 = 0;
                foreach ($map['RegionDo'] as $item1) {
                    $model->regionDo[$n1] = regionDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
