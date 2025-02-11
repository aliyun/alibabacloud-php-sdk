<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAutoScalingConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class storage extends Model
{
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
