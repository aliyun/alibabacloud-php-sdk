<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeDedicatedHostDisksResponseBody\disks;

class DescribeDedicatedHostDisksResponseBody extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedHostId' => 'DedicatedHostId',
        'disks' => 'Disks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }

        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1 = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n1 = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1++] = disks::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
