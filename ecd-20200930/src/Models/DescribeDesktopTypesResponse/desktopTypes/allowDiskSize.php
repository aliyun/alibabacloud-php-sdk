<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponse\desktopTypes;

use AlibabaCloud\Tea\Model;

class allowDiskSize extends Model
{
    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var int
     */
    public $defaultDataDiskSize;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'dataDiskSize'        => 'DataDiskSize',
        'defaultDataDiskSize' => 'DefaultDataDiskSize',
        'systemDiskSize'      => 'SystemDiskSize',
    ];

    public function validate()
    {
        Model::validateRequired('dataDiskSize', $this->dataDiskSize, true);
        Model::validateRequired('defaultDataDiskSize', $this->defaultDataDiskSize, true);
        Model::validateRequired('systemDiskSize', $this->systemDiskSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->defaultDataDiskSize) {
            $res['DefaultDataDiskSize'] = $this->defaultDataDiskSize;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allowDiskSize
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DefaultDataDiskSize'])) {
            $model->defaultDataDiskSize = $map['DefaultDataDiskSize'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
