<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\policy;

use AlibabaCloud\Dara\Model;

class watermarkPolicy extends Model
{
    /**
     * @var string
     */
    public $watermarkSwitch;

    /**
     * @var string[]
     */
    public $watermarkTypes;
    protected $_name = [
        'watermarkSwitch' => 'WatermarkSwitch',
        'watermarkTypes' => 'WatermarkTypes',
    ];

    public function validate()
    {
        if (\is_array($this->watermarkTypes)) {
            Model::validateArray($this->watermarkTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->watermarkSwitch) {
            $res['WatermarkSwitch'] = $this->watermarkSwitch;
        }

        if (null !== $this->watermarkTypes) {
            if (\is_array($this->watermarkTypes)) {
                $res['WatermarkTypes'] = [];
                $n1 = 0;
                foreach ($this->watermarkTypes as $item1) {
                    $res['WatermarkTypes'][$n1] = $item1;
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
        if (isset($map['WatermarkSwitch'])) {
            $model->watermarkSwitch = $map['WatermarkSwitch'];
        }

        if (isset($map['WatermarkTypes'])) {
            if (!empty($map['WatermarkTypes'])) {
                $model->watermarkTypes = [];
                $n1 = 0;
                foreach ($map['WatermarkTypes'] as $item1) {
                    $model->watermarkTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
