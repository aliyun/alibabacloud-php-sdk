<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\AckConfig;

use AlibabaCloud\Tea\Model;

class pvcs extends Model
{
    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $dataDiskStorageClass;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'dataDiskSize'         => 'DataDiskSize',
        'dataDiskStorageClass' => 'DataDiskStorageClass',
        'name'                 => 'Name',
        'path'                 => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->dataDiskStorageClass) {
            $res['DataDiskStorageClass'] = $this->dataDiskStorageClass;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DataDiskStorageClass'])) {
            $model->dataDiskStorageClass = $map['DataDiskStorageClass'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
