<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedStorageSizeList;

class supportedInstanceClass extends Model
{
    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var supportedStorageSizeList
     */
    public $supportedStorageSizeList;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'instanceClass' => 'InstanceClass',
        'supportedStorageSizeList' => 'SupportedStorageSizeList',
        'tips' => 'Tips',
    ];

    public function validate()
    {
        if (null !== $this->supportedStorageSizeList) {
            $this->supportedStorageSizeList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->supportedStorageSizeList) {
            $res['SupportedStorageSizeList'] = null !== $this->supportedStorageSizeList ? $this->supportedStorageSizeList->toArray($noStream) : $this->supportedStorageSizeList;
        }

        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
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
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['SupportedStorageSizeList'])) {
            $model->supportedStorageSizeList = supportedStorageSizeList::fromMap($map['SupportedStorageSizeList']);
        }

        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
