<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\GetAggregatedDesktopsResponseBody;

use AlibabaCloud\Dara\Model;

class aggregations extends Model
{
    /**
     * @var string[][]
     */
    public $desktopAggregation;
    protected $_name = [
        'desktopAggregation' => 'DesktopAggregation',
    ];

    public function validate()
    {
        if (\is_array($this->desktopAggregation)) {
            Model::validateArray($this->desktopAggregation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopAggregation) {
            if (\is_array($this->desktopAggregation)) {
                $res['DesktopAggregation'] = [];
                $n1 = 0;
                foreach ($this->desktopAggregation as $item1) {
                    if (\is_array($item1)) {
                        $res['DesktopAggregation'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['DesktopAggregation'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['DesktopAggregation'])) {
            if (!empty($map['DesktopAggregation'])) {
                $model->desktopAggregation = [];
                $n1 = 0;
                foreach ($map['DesktopAggregation'] as $item1) {
                    if (!empty($item1)) {
                        $model->desktopAggregation[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->desktopAggregation[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
