<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList\supportedExecutorList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList\supportedNodeCountList;
use AlibabaCloud\Tea\Model;

class supportedInstanceClassList extends Model
{
    /**
     * @example C32
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @var supportedExecutorList[]
     */
    public $supportedExecutorList;

    /**
     * @var supportedNodeCountList[]
     */
    public $supportedNodeCountList;

    /**
     * @example C32
     *
     * @var string
     */
    public $tips;
    protected $_name = [
        'instanceClass'          => 'InstanceClass',
        'supportedExecutorList'  => 'SupportedExecutorList',
        'supportedNodeCountList' => 'SupportedNodeCountList',
        'tips'                   => 'Tips',
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
        if (null !== $this->supportedExecutorList) {
            $res['SupportedExecutorList'] = [];
            if (null !== $this->supportedExecutorList && \is_array($this->supportedExecutorList)) {
                $n = 0;
                foreach ($this->supportedExecutorList as $item) {
                    $res['SupportedExecutorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportedNodeCountList) {
            $res['SupportedNodeCountList'] = [];
            if (null !== $this->supportedNodeCountList && \is_array($this->supportedNodeCountList)) {
                $n = 0;
                foreach ($this->supportedNodeCountList as $item) {
                    $res['SupportedNodeCountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedInstanceClassList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['SupportedExecutorList'])) {
            if (!empty($map['SupportedExecutorList'])) {
                $model->supportedExecutorList = [];
                $n                            = 0;
                foreach ($map['SupportedExecutorList'] as $item) {
                    $model->supportedExecutorList[$n++] = null !== $item ? supportedExecutorList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportedNodeCountList'])) {
            if (!empty($map['SupportedNodeCountList'])) {
                $model->supportedNodeCountList = [];
                $n                             = 0;
                foreach ($map['SupportedNodeCountList'] as $item) {
                    $model->supportedNodeCountList[$n++] = null !== $item ? supportedNodeCountList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
