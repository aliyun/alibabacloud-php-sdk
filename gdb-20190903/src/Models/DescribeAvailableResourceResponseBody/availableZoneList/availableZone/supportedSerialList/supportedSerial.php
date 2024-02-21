<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList;

use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList;
use AlibabaCloud\Tea\Model;

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
        'serial'                     => 'Serial',
        'supportedInstanceClassList' => 'SupportedInstanceClassList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }
        if (null !== $this->supportedInstanceClassList) {
            $res['SupportedInstanceClassList'] = null !== $this->supportedInstanceClassList ? $this->supportedInstanceClassList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedSerial
     */
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
