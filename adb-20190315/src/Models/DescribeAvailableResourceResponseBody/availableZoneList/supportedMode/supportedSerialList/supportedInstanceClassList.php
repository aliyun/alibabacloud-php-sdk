<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList\supportedExecutorList;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList\supportedNodeCountList;

class supportedInstanceClassList extends Model
{
    /**
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
     * @var string
     */
    public $tips;
    protected $_name = [
        'instanceClass' => 'InstanceClass',
        'supportedExecutorList' => 'SupportedExecutorList',
        'supportedNodeCountList' => 'SupportedNodeCountList',
        'tips' => 'Tips',
    ];

    public function validate()
    {
        if (\is_array($this->supportedExecutorList)) {
            Model::validateArray($this->supportedExecutorList);
        }
        if (\is_array($this->supportedNodeCountList)) {
            Model::validateArray($this->supportedNodeCountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->supportedExecutorList) {
            if (\is_array($this->supportedExecutorList)) {
                $res['SupportedExecutorList'] = [];
                $n1 = 0;
                foreach ($this->supportedExecutorList as $item1) {
                    $res['SupportedExecutorList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->supportedNodeCountList) {
            if (\is_array($this->supportedNodeCountList)) {
                $res['SupportedNodeCountList'] = [];
                $n1 = 0;
                foreach ($this->supportedNodeCountList as $item1) {
                    $res['SupportedNodeCountList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['SupportedExecutorList'])) {
            if (!empty($map['SupportedExecutorList'])) {
                $model->supportedExecutorList = [];
                $n1 = 0;
                foreach ($map['SupportedExecutorList'] as $item1) {
                    $model->supportedExecutorList[$n1++] = supportedExecutorList::fromMap($item1);
                }
            }
        }

        if (isset($map['SupportedNodeCountList'])) {
            if (!empty($map['SupportedNodeCountList'])) {
                $model->supportedNodeCountList = [];
                $n1 = 0;
                foreach ($map['SupportedNodeCountList'] as $item1) {
                    $model->supportedNodeCountList[$n1++] = supportedNodeCountList::fromMap($item1);
                }
            }
        }

        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
