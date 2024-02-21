<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList;

use AlibabaCloud\SDK\Gdb\V20190903\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedStorageSizeList;
use AlibabaCloud\Tea\Model;

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
        'instanceClass'            => 'InstanceClass',
        'supportedStorageSizeList' => 'SupportedStorageSizeList',
        'tips'                     => 'Tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->supportedStorageSizeList) {
            $res['SupportedStorageSizeList'] = null !== $this->supportedStorageSizeList ? $this->supportedStorageSizeList->toMap() : null;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedInstanceClass
     */
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
