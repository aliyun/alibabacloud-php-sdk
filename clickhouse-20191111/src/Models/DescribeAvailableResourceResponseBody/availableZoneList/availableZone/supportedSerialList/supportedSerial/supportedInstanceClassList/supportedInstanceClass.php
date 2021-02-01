<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedExecutorList;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedNodeCountList;
use AlibabaCloud\Tea\Model;

class supportedInstanceClass extends Model
{
    /**
     * @var supportedExecutorList
     */
    public $supportedExecutorList;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var supportedNodeCountList
     */
    public $supportedNodeCountList;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'supportedExecutorList'  => 'SupportedExecutorList',
        'instanceClass'          => 'InstanceClass',
        'supportedNodeCountList' => 'SupportedNodeCountList',
        'tips'                   => 'Tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->supportedExecutorList) {
            $res['SupportedExecutorList'] = null !== $this->supportedExecutorList ? $this->supportedExecutorList->toMap() : null;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->supportedNodeCountList) {
            $res['SupportedNodeCountList'] = null !== $this->supportedNodeCountList ? $this->supportedNodeCountList->toMap() : null;
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
        if (isset($map['SupportedExecutorList'])) {
            $model->supportedExecutorList = supportedExecutorList::fromMap($map['SupportedExecutorList']);
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['SupportedNodeCountList'])) {
            $model->supportedNodeCountList = supportedNodeCountList::fromMap($map['SupportedNodeCountList']);
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
