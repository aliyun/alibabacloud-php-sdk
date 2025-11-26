<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\deviceInfos\network;

class deviceInfos extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var network[]
     */
    public $network;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'name' => 'Name',
        'network' => 'Network',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->network)) {
            Model::validateArray($this->network);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->network) {
            if (\is_array($this->network)) {
                $res['Network'] = [];
                $n1 = 0;
                foreach ($this->network as $item1) {
                    $res['Network'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Network'])) {
            if (!empty($map['Network'])) {
                $model->network = [];
                $n1 = 0;
                foreach ($map['Network'] as $item1) {
                    $model->network[$n1] = network::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
