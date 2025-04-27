<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody\result;

use AlibabaCloud\Dara\Model;

class extendConfigs extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var int
     */
    public $disk;

    /**
     * @var string
     */
    public $diskType;
    protected $_name = [
        'configType' => 'ConfigType',
        'disk' => 'Disk',
        'diskType' => 'DiskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
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
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        return $model;
    }
}
