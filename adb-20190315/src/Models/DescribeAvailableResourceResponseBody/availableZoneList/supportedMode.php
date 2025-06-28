<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList;

class supportedMode extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var supportedSerialList[]
     */
    public $supportedSerialList;
    protected $_name = [
        'mode' => 'Mode',
        'supportedSerialList' => 'SupportedSerialList',
    ];

    public function validate()
    {
        if (\is_array($this->supportedSerialList)) {
            Model::validateArray($this->supportedSerialList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->supportedSerialList) {
            if (\is_array($this->supportedSerialList)) {
                $res['SupportedSerialList'] = [];
                $n1 = 0;
                foreach ($this->supportedSerialList as $item1) {
                    $res['SupportedSerialList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['SupportedSerialList'])) {
            if (!empty($map['SupportedSerialList'])) {
                $model->supportedSerialList = [];
                $n1 = 0;
                foreach ($map['SupportedSerialList'] as $item1) {
                    $model->supportedSerialList[$n1] = supportedSerialList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
