<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAICloudPhoneResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string[]
     */
    public $packageIds;
    protected $_name = [
        'orderId' => 'OrderId',
        'packageIds' => 'PackageIds',
    ];

    public function validate()
    {
        if (\is_array($this->packageIds)) {
            Model::validateArray($this->packageIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->packageIds) {
            if (\is_array($this->packageIds)) {
                $res['PackageIds'] = [];
                $n1 = 0;
                foreach ($this->packageIds as $item1) {
                    $res['PackageIds'][$n1] = $item1;
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
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PackageIds'])) {
            if (!empty($map['PackageIds'])) {
                $model->packageIds = [];
                $n1 = 0;
                foreach ($map['PackageIds'] as $item1) {
                    $model->packageIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
