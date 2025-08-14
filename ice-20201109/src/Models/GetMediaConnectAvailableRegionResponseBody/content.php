<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaConnectAvailableRegionResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var string
     */
    public $defaultRegion;

    /**
     * @var string[]
     */
    public $regionList;
    protected $_name = [
        'defaultRegion' => 'DefaultRegion',
        'regionList' => 'RegionList',
    ];

    public function validate()
    {
        if (\is_array($this->regionList)) {
            Model::validateArray($this->regionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultRegion) {
            $res['DefaultRegion'] = $this->defaultRegion;
        }

        if (null !== $this->regionList) {
            if (\is_array($this->regionList)) {
                $res['RegionList'] = [];
                $n1 = 0;
                foreach ($this->regionList as $item1) {
                    $res['RegionList'][$n1] = $item1;
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
        if (isset($map['DefaultRegion'])) {
            $model->defaultRegion = $map['DefaultRegion'];
        }

        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n1 = 0;
                foreach ($map['RegionList'] as $item1) {
                    $model->regionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
