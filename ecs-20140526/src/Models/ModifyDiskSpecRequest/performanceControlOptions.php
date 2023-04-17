<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDiskSpecRequest;

use AlibabaCloud\Tea\Model;

class performanceControlOptions extends Model
{
    /**
     * @var int
     */
    public $IOPS;

    /**
     * @var string
     */
    public $recover;

    /**
     * @var int
     */
    public $throughput;
    protected $_name = [
        'IOPS'       => 'IOPS',
        'recover'    => 'Recover',
        'throughput' => 'Throughput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IOPS) {
            $res['IOPS'] = $this->IOPS;
        }
        if (null !== $this->recover) {
            $res['Recover'] = $this->recover;
        }
        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceControlOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IOPS'])) {
            $model->IOPS = $map['IOPS'];
        }
        if (isset($map['Recover'])) {
            $model->recover = $map['Recover'];
        }
        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }

        return $model;
    }
}
