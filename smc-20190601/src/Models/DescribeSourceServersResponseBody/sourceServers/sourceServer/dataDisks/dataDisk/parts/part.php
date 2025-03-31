<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks\dataDisk\parts;

use AlibabaCloud\Dara\Model;

class part extends Model
{
    /**
     * @var bool
     */
    public $canBlock;

    /**
     * @var string
     */
    public $device;

    /**
     * @var bool
     */
    public $need;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $sizeBytes;
    protected $_name = [
        'canBlock' => 'CanBlock',
        'device' => 'Device',
        'need' => 'Need',
        'path' => 'Path',
        'sizeBytes' => 'SizeBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canBlock) {
            $res['CanBlock'] = $this->canBlock;
        }

        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }

        if (null !== $this->need) {
            $res['Need'] = $this->need;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->sizeBytes) {
            $res['SizeBytes'] = $this->sizeBytes;
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
        if (isset($map['CanBlock'])) {
            $model->canBlock = $map['CanBlock'];
        }

        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }

        if (isset($map['Need'])) {
            $model->need = $map['Need'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }

        return $model;
    }
}
