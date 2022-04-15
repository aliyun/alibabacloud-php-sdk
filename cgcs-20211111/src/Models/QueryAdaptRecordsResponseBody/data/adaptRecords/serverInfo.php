<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords;

use AlibabaCloud\Tea\Model;

class serverInfo extends Model
{
    /**
     * @var string
     */
    public $cpuType;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'cpuType' => 'CpuType',
        'gpuType' => 'GpuType',
        'name'    => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuType) {
            $res['CpuType'] = $this->cpuType;
        }
        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpuType'])) {
            $model->cpuType = $map['CpuType'];
        }
        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
