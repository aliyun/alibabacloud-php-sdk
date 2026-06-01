<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateMobileAgentPackageResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $mobileAgentPackageIds;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mobileAgentPackageIds' => 'MobileAgentPackageIds',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->mobileAgentPackageIds)) {
            Model::validateArray($this->mobileAgentPackageIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mobileAgentPackageIds) {
            if (\is_array($this->mobileAgentPackageIds)) {
                $res['MobileAgentPackageIds'] = [];
                $n1 = 0;
                foreach ($this->mobileAgentPackageIds as $item1) {
                    $res['MobileAgentPackageIds'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['MobileAgentPackageIds'])) {
            if (!empty($map['MobileAgentPackageIds'])) {
                $model->mobileAgentPackageIds = [];
                $n1 = 0;
                foreach ($map['MobileAgentPackageIds'] as $item1) {
                    $model->mobileAgentPackageIds[$n1] = $item1;
                    ++$n1;
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
