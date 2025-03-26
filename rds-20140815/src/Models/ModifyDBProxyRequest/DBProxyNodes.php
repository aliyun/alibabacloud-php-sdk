<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyDBProxyRequest;

use AlibabaCloud\Dara\Model;

class DBProxyNodes extends Model
{
    /**
     * @var string
     */
    public $cpuCores;

    /**
     * @var string
     */
    public $nodeCounts;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cpuCores' => 'cpuCores',
        'nodeCounts' => 'nodeCounts',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCores) {
            $res['cpuCores'] = $this->cpuCores;
        }

        if (null !== $this->nodeCounts) {
            $res['nodeCounts'] = $this->nodeCounts;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['cpuCores'])) {
            $model->cpuCores = $map['cpuCores'];
        }

        if (isset($map['nodeCounts'])) {
            $model->nodeCounts = $map['nodeCounts'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
