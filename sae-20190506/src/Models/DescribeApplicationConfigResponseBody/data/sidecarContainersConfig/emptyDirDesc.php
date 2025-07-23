<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data\sidecarContainersConfig;

use AlibabaCloud\Tea\Model;

class emptyDirDesc extends Model
{
    /**
     * @description Mount path of the data volume within the container.
     *
     * @example /mnt/cache
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The name of the shared temporary storage.
     *
     * @example sidecar-container
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'mountPath' => 'MountPath',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emptyDirDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
