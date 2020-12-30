<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\systemDiskParts;

use AlibabaCloud\Tea\Model;

class systemDiskPart extends Model
{
    /**
     * @var bool
     */
    public $canBlock;

    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var bool
     */
    public $need;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'canBlock'  => 'CanBlock',
        'sizeBytes' => 'SizeBytes',
        'need'      => 'Need',
        'device'    => 'Device',
        'path'      => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canBlock) {
            $res['CanBlock'] = $this->canBlock;
        }
        if (null !== $this->sizeBytes) {
            $res['SizeBytes'] = $this->sizeBytes;
        }
        if (null !== $this->need) {
            $res['Need'] = $this->need;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDiskPart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanBlock'])) {
            $model->canBlock = $map['CanBlock'];
        }
        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }
        if (isset($map['Need'])) {
            $model->need = $map['Need'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
