<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryDeviceStatResponseBody\appDeviceStats\appDeviceStat;

class appDeviceStats extends Model
{
    /**
     * @var appDeviceStat[]
     */
    public $appDeviceStat;
    protected $_name = [
        'appDeviceStat' => 'AppDeviceStat',
    ];

    public function validate()
    {
        if (\is_array($this->appDeviceStat)) {
            Model::validateArray($this->appDeviceStat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appDeviceStat) {
            if (\is_array($this->appDeviceStat)) {
                $res['AppDeviceStat'] = [];
                $n1 = 0;
                foreach ($this->appDeviceStat as $item1) {
                    $res['AppDeviceStat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppDeviceStat'])) {
            if (!empty($map['AppDeviceStat'])) {
                $model->appDeviceStat = [];
                $n1 = 0;
                foreach ($map['AppDeviceStat'] as $item1) {
                    $model->appDeviceStat[$n1] = appDeviceStat::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
