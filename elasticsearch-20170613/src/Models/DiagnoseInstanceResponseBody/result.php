<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponseBody\result\items;

class result extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $diagnosisMode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'createTime' => 'createTime',
        'diagnosisMode' => 'diagnosisMode',
        'instanceId' => 'instanceId',
        'items' => 'items',
        'reportId' => 'reportId',
        'state' => 'state',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->diagnosisMode) {
            $res['diagnosisMode'] = $this->diagnosisMode;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['diagnosisMode'])) {
            $model->diagnosisMode = $map['diagnosisMode'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
