<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class mountDesc extends Model
{
    /**
     * @description The path on which the NAS file system is mounted.
     *
     * @example /tmp
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The directory in the NAS file system.
     *
     * @example /
     *
     * @var string
     */
    public $nasPath;
    protected $_name = [
        'mountPath' => 'MountPath',
        'nasPath'   => 'NasPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->nasPath) {
            $res['NasPath'] = $this->nasPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['NasPath'])) {
            $model->nasPath = $map['NasPath'];
        }

        return $model;
    }
}
