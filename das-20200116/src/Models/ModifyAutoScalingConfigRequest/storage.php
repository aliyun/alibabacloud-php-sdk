<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;

use AlibabaCloud\Dara\Model;

class storage extends Model
{
    /**
     * @var bool
     */
    public $apply;
    /**
     * @var int
     */
    public $diskUsageUpperThreshold;
    /**
     * @var int
     */
    public $maxStorage;
    /**
     * @var bool
     */
    public $upgrade;
    protected $_name = [
        'apply'                   => 'Apply',
        'diskUsageUpperThreshold' => 'DiskUsageUpperThreshold',
        'maxStorage'              => 'MaxStorage',
        'upgrade'                 => 'Upgrade',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apply) {
            $res['Apply'] = $this->apply;
        }

        if (null !== $this->diskUsageUpperThreshold) {
            $res['DiskUsageUpperThreshold'] = $this->diskUsageUpperThreshold;
        }

        if (null !== $this->maxStorage) {
            $res['MaxStorage'] = $this->maxStorage;
        }

        if (null !== $this->upgrade) {
            $res['Upgrade'] = $this->upgrade;
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
        if (isset($map['Apply'])) {
            $model->apply = $map['Apply'];
        }

        if (isset($map['DiskUsageUpperThreshold'])) {
            $model->diskUsageUpperThreshold = $map['DiskUsageUpperThreshold'];
        }

        if (isset($map['MaxStorage'])) {
            $model->maxStorage = $map['MaxStorage'];
        }

        if (isset($map['Upgrade'])) {
            $model->upgrade = $map['Upgrade'];
        }

        return $model;
    }
}
