<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedFlexibleResource;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList;

class supportedSerialList extends Model
{
    /**
     * @var string
     */
    public $serial;

    /**
     * @var supportedFlexibleResource[]
     */
    public $supportedFlexibleResource;

    /**
     * @var supportedInstanceClassList[]
     */
    public $supportedInstanceClassList;
    protected $_name = [
        'serial' => 'Serial',
        'supportedFlexibleResource' => 'SupportedFlexibleResource',
        'supportedInstanceClassList' => 'SupportedInstanceClassList',
    ];

    public function validate()
    {
        if (\is_array($this->supportedFlexibleResource)) {
            Model::validateArray($this->supportedFlexibleResource);
        }
        if (\is_array($this->supportedInstanceClassList)) {
            Model::validateArray($this->supportedInstanceClassList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serial) {
            $res['Serial'] = $this->serial;
        }

        if (null !== $this->supportedFlexibleResource) {
            if (\is_array($this->supportedFlexibleResource)) {
                $res['SupportedFlexibleResource'] = [];
                $n1 = 0;
                foreach ($this->supportedFlexibleResource as $item1) {
                    $res['SupportedFlexibleResource'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->supportedInstanceClassList) {
            if (\is_array($this->supportedInstanceClassList)) {
                $res['SupportedInstanceClassList'] = [];
                $n1 = 0;
                foreach ($this->supportedInstanceClassList as $item1) {
                    $res['SupportedInstanceClassList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Serial'])) {
            $model->serial = $map['Serial'];
        }

        if (isset($map['SupportedFlexibleResource'])) {
            if (!empty($map['SupportedFlexibleResource'])) {
                $model->supportedFlexibleResource = [];
                $n1 = 0;
                foreach ($map['SupportedFlexibleResource'] as $item1) {
                    $model->supportedFlexibleResource[$n1++] = supportedFlexibleResource::fromMap($item1);
                }
            }
        }

        if (isset($map['SupportedInstanceClassList'])) {
            if (!empty($map['SupportedInstanceClassList'])) {
                $model->supportedInstanceClassList = [];
                $n1 = 0;
                foreach ($map['SupportedInstanceClassList'] as $item1) {
                    $model->supportedInstanceClassList[$n1++] = supportedInstanceClassList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
