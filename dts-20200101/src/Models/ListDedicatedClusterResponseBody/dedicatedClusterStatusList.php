<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponseBody\dedicatedClusterStatusList\dedicatedClusterStatus;

class dedicatedClusterStatusList extends Model
{
    /**
     * @var dedicatedClusterStatus[]
     */
    public $dedicatedClusterStatus;
    protected $_name = [
        'dedicatedClusterStatus' => 'DedicatedClusterStatus',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedClusterStatus)) {
            Model::validateArray($this->dedicatedClusterStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedClusterStatus) {
            if (\is_array($this->dedicatedClusterStatus)) {
                $res['DedicatedClusterStatus'] = [];
                $n1 = 0;
                foreach ($this->dedicatedClusterStatus as $item1) {
                    $res['DedicatedClusterStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DedicatedClusterStatus'])) {
            if (!empty($map['DedicatedClusterStatus'])) {
                $model->dedicatedClusterStatus = [];
                $n1 = 0;
                foreach ($map['DedicatedClusterStatus'] as $item1) {
                    $model->dedicatedClusterStatus[$n1] = dedicatedClusterStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
