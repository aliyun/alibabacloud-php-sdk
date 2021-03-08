<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopTypesResponseBody\desktopTypes;

use AlibabaCloud\Tea\Model;

class allowDiskSize extends Model
{
    /**
     * @var int
     */
    public $systemDiskSize;

    /**
     * @var int
     */
    public $dataDiskSize;
    protected $_name = [
        'systemDiskSize' => 'SystemDiskSize',
        'dataDiskSize'   => 'DataDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
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
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }

        return $model;
    }
}
