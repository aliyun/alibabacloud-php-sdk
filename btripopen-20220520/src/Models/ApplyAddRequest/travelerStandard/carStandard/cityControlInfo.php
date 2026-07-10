<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyAddRequest\travelerStandard\carStandard\cityControlInfo\cityInfos;

class cityControlInfo extends Model
{
    /**
     * @var int
     */
    public $cityControlType;

    /**
     * @var cityInfos[]
     */
    public $cityInfos;
    protected $_name = [
        'cityControlType' => 'city_control_type',
        'cityInfos' => 'city_infos',
    ];

    public function validate()
    {
        if (\is_array($this->cityInfos)) {
            Model::validateArray($this->cityInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cityControlType) {
            $res['city_control_type'] = $this->cityControlType;
        }

        if (null !== $this->cityInfos) {
            if (\is_array($this->cityInfos)) {
                $res['city_infos'] = [];
                $n1 = 0;
                foreach ($this->cityInfos as $item1) {
                    $res['city_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['city_control_type'])) {
            $model->cityControlType = $map['city_control_type'];
        }

        if (isset($map['city_infos'])) {
            if (!empty($map['city_infos'])) {
                $model->cityInfos = [];
                $n1 = 0;
                foreach ($map['city_infos'] as $item1) {
                    $model->cityInfos[$n1] = cityInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
