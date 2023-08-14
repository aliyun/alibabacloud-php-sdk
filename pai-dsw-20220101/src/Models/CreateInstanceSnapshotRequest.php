<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceSnapshotRequest\labels;
use AlibabaCloud\Tea\Model;

class CreateInstanceSnapshotRequest extends Model
{
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
        'imageUrl'            => 'ImageUrl',
        'labels'              => 'Labels',
        'snapshotDescription' => 'SnapshotDescription',
        'snapshotName'        => 'SnapshotName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['SnapshotDescription'])) {
            $model->snapshotDescription = $map['SnapshotDescription'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }

        return $model;
    }
}
