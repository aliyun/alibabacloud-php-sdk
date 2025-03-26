<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateDesktopsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $desktopId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->desktopId)) {
            Model::validateArray($this->desktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopId) {
            if (\is_array($this->desktopId)) {
                $res['DesktopId'] = [];
                $n1 = 0;
                foreach ($this->desktopId as $item1) {
                    $res['DesktopId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = [];
                $n1 = 0;
                foreach ($map['DesktopId'] as $item1) {
                    $model->desktopId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
