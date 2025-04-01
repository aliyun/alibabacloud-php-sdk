<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeGlobalDistributeCacheResponseBody\globalDistributeCaches\subInstances;

class globalDistributeCaches extends Model
{
    /**
     * @var string
     */
    public $globalInstanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subInstances[]
     */
    public $subInstances;
    protected $_name = [
        'globalInstanceId' => 'GlobalInstanceId',
        'status' => 'Status',
        'subInstances' => 'SubInstances',
    ];

    public function validate()
    {
        if (\is_array($this->subInstances)) {
            Model::validateArray($this->subInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalInstanceId) {
            $res['GlobalInstanceId'] = $this->globalInstanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subInstances) {
            if (\is_array($this->subInstances)) {
                $res['SubInstances'] = [];
                $n1 = 0;
                foreach ($this->subInstances as $item1) {
                    $res['SubInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GlobalInstanceId'])) {
            $model->globalInstanceId = $map['GlobalInstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubInstances'])) {
            if (!empty($map['SubInstances'])) {
                $model->subInstances = [];
                $n1 = 0;
                foreach ($map['SubInstances'] as $item1) {
                    $model->subInstances[$n1++] = subInstances::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
