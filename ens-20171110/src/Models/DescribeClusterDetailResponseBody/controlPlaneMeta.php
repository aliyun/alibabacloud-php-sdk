<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterDetailResponseBody\controlPlaneMeta\masterInstances;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterDetailResponseBody\controlPlaneMeta\masterUrl;

class controlPlaneMeta extends Model
{
    /**
     * @var masterInstances[]
     */
    public $masterInstances;

    /**
     * @var masterUrl
     */
    public $masterUrl;
    protected $_name = [
        'masterInstances' => 'MasterInstances',
        'masterUrl' => 'MasterUrl',
    ];

    public function validate()
    {
        if (\is_array($this->masterInstances)) {
            Model::validateArray($this->masterInstances);
        }
        if (null !== $this->masterUrl) {
            $this->masterUrl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->masterInstances) {
            if (\is_array($this->masterInstances)) {
                $res['MasterInstances'] = [];
                $n1 = 0;
                foreach ($this->masterInstances as $item1) {
                    $res['MasterInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->masterUrl) {
            $res['MasterUrl'] = null !== $this->masterUrl ? $this->masterUrl->toArray($noStream) : $this->masterUrl;
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
        if (isset($map['MasterInstances'])) {
            if (!empty($map['MasterInstances'])) {
                $model->masterInstances = [];
                $n1 = 0;
                foreach ($map['MasterInstances'] as $item1) {
                    $model->masterInstances[$n1] = masterInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MasterUrl'])) {
            $model->masterUrl = masterUrl::fromMap($map['MasterUrl']);
        }

        return $model;
    }
}
