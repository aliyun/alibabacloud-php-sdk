<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceTrafficResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceTrafficResponseBody\instanceTraffic\monitorItem;

class instanceTraffic extends Model
{
    /**
     * @var monitorItem[]
     */
    public $monitorItem;
    protected $_name = [
        'monitorItem' => 'MonitorItem',
    ];

    public function validate()
    {
        if (\is_array($this->monitorItem)) {
            Model::validateArray($this->monitorItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->monitorItem) {
            if (\is_array($this->monitorItem)) {
                $res['MonitorItem'] = [];
                $n1 = 0;
                foreach ($this->monitorItem as $item1) {
                    $res['MonitorItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MonitorItem'])) {
            if (!empty($map['MonitorItem'])) {
                $model->monitorItem = [];
                $n1 = 0;
                foreach ($map['MonitorItem'] as $item1) {
                    $model->monitorItem[$n1++] = monitorItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
