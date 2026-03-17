<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody\devices\device;

class devices extends Model
{
    /**
     * @var device[]
     */
    public $device;
    protected $_name = [
        'device' => 'Device',
    ];

    public function validate()
    {
        if (\is_array($this->device)) {
            Model::validateArray($this->device);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->device) {
            if (\is_array($this->device)) {
                $res['Device'] = [];
                $n1 = 0;
                foreach ($this->device as $item1) {
                    $res['Device'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Device'])) {
            if (!empty($map['Device'])) {
                $model->device = [];
                $n1 = 0;
                foreach ($map['Device'] as $item1) {
                    $model->device[$n1] = device::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
