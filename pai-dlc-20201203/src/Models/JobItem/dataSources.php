<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem;

use AlibabaCloud\Tea\Model;

class dataSources extends Model
{
    /**
     * @example data-20210114104214-vf9lowjt3pso
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example /mnt/data
     *
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'mountPath' => 'MountPath',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        return $model;
    }
}
