<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponseBody\result\diagnoseItems;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var diagnoseItems[]
     */
    public $diagnoseItems;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'createTime'    => 'createTime',
        'diagnoseItems' => 'diagnoseItems',
        'instanceId'    => 'instanceId',
        'reportId'      => 'reportId',
        'state'         => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->diagnoseItems) {
            $res['diagnoseItems'] = [];
            if (null !== $this->diagnoseItems && \is_array($this->diagnoseItems)) {
                $n = 0;
                foreach ($this->diagnoseItems as $item) {
                    $res['diagnoseItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['diagnoseItems'])) {
            if (!empty($map['diagnoseItems'])) {
                $model->diagnoseItems = [];
                $n                    = 0;
                foreach ($map['diagnoseItems'] as $item) {
                    $model->diagnoseItems[$n++] = null !== $item ? diagnoseItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
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
