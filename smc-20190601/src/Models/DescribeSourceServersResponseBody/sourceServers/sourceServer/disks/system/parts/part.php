<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\disks\system\parts;

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
    public $path;

    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'canBlock' => 'CanBlock',
        'path' => 'Path',
        'sizeBytes' => 'SizeBytes',
        'type' => 'Type',
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

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->sizeBytes) {
            $res['SizeBytes'] = $this->sizeBytes;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
