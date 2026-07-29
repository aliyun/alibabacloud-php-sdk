<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial;

class supportedSerialList extends Model
{
    /**
     * @var supportedSerial[]
     */
    public $supportedSerial;
    protected $_name = [
        'supportedSerial' => 'SupportedSerial',
    ];

    public function validate()
    {
        if (\is_array($this->supportedSerial)) {
            Model::validateArray($this->supportedSerial);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedSerial) {
            if (\is_array($this->supportedSerial)) {
                $res['SupportedSerial'] = [];
                $n1 = 0;
                foreach ($this->supportedSerial as $item1) {
                    $res['SupportedSerial'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SupportedSerial'])) {
            if (!empty($map['SupportedSerial'])) {
                $model->supportedSerial = [];
                $n1 = 0;
                foreach ($map['SupportedSerial'] as $item1) {
                    $model->supportedSerial[$n1] = supportedSerial::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
