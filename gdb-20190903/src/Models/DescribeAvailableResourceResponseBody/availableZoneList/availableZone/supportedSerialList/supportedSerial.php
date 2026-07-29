<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList;

class supportedSerial extends Model
{
    /**
     * @var string
     */
    public $serial;

    /**
     * @var supportedInstanceClassList
     */
    public $supportedInstanceClassList;
    protected $_name = [
        'serial' => 'Serial',
        'supportedInstanceClassList' => 'SupportedInstanceClassList',
    ];

    public function validate()
    {
        if (null !== $this->supportedInstanceClassList) {
            $this->supportedInstanceClassList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }

        if (null !== $this->supportedInstanceClassList) {
            $res['SupportedInstanceClassList'] = null !== $this->supportedInstanceClassList ? $this->supportedInstanceClassList->toArray($noStream) : $this->supportedInstanceClassList;
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
        if (isset($map['Serial'])) {
            $model->serial = $map['Serial'];
        }

        if (isset($map['SupportedInstanceClassList'])) {
            $model->supportedInstanceClassList = supportedInstanceClassList::fromMap($map['SupportedInstanceClassList']);
        }

        return $model;
    }
}
