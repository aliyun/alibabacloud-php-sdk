<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass;

class supportedInstanceClassList extends Model
{
    /**
     * @var supportedInstanceClass[]
     */
    public $supportedInstanceClass;
    protected $_name = [
        'supportedInstanceClass' => 'SupportedInstanceClass',
    ];

    public function validate()
    {
        if (\is_array($this->supportedInstanceClass)) {
            Model::validateArray($this->supportedInstanceClass);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedInstanceClass) {
            if (\is_array($this->supportedInstanceClass)) {
                $res['SupportedInstanceClass'] = [];
                $n1 = 0;
                foreach ($this->supportedInstanceClass as $item1) {
                    $res['SupportedInstanceClass'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedInstanceClass'])) {
            if (!empty($map['SupportedInstanceClass'])) {
                $model->supportedInstanceClass = [];
                $n1 = 0;
                foreach ($map['SupportedInstanceClass'] as $item1) {
                    $model->supportedInstanceClass[$n1] = supportedInstanceClass::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
