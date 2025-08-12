<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\ispCities\ispCity;

class ispCities extends Model
{
    /**
     * @var ispCity[]
     */
    public $ispCity;
    protected $_name = [
        'ispCity' => 'IspCity',
    ];

    public function validate()
    {
        if (\is_array($this->ispCity)) {
            Model::validateArray($this->ispCity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ispCity) {
            if (\is_array($this->ispCity)) {
                $res['IspCity'] = [];
                $n1 = 0;
                foreach ($this->ispCity as $item1) {
                    $res['IspCity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IspCity'])) {
            if (!empty($map['IspCity'])) {
                $model->ispCity = [];
                $n1 = 0;
                foreach ($map['IspCity'] as $item1) {
                    $model->ispCity[$n1] = ispCity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
