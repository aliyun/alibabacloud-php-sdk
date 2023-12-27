<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceSnapshotRequest\labels;
use AlibabaCloud\Tea\Model;

class CreateInstanceSnapshotRequest extends Model
{
    /**
     * @var string[]
     */
    public $excludePaths;

    /**
     * @example registry.cn-shanghai.aliyuncs.com/pai_product/tensorflow:py36_cpu_tf1.12_ubuntu
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example {\"foo\": \"bar\"}
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @example training_data_env
     *
     * @var string
     */
    public $snapshotDescription;

    /**
     * @example training_data_env
     *
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'excludePaths'        => 'ExcludePaths',
        'imageUrl'            => 'ImageUrl',
        'labels'              => 'Labels',
        'overwrite'           => 'Overwrite',
        'snapshotDescription' => 'SnapshotDescription',
        'snapshotName'        => 'SnapshotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludePaths) {
            $res['ExcludePaths'] = $this->excludePaths;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->snapshotDescription) {
            $res['SnapshotDescription'] = $this->snapshotDescription;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludePaths'])) {
            if (!empty($map['ExcludePaths'])) {
                $model->excludePaths = $map['ExcludePaths'];
            }
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['SnapshotDescription'])) {
            $model->snapshotDescription = $map['SnapshotDescription'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
