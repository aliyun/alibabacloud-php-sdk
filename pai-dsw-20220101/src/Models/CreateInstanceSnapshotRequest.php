<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceSnapshotRequest\labels;

class CreateInstanceSnapshotRequest extends Model
{
    /**
     * @var string[]
     */
    public $excludePaths;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $snapshotDescription;

    /**
     * @var string
     */
    public $snapshotName;
    protected $_name = [
        'excludePaths' => 'ExcludePaths',
        'imageUrl' => 'ImageUrl',
        'labels' => 'Labels',
        'overwrite' => 'Overwrite',
        'snapshotDescription' => 'SnapshotDescription',
        'snapshotName' => 'SnapshotName',
    ];

    public function validate()
    {
        if (\is_array($this->excludePaths)) {
            Model::validateArray($this->excludePaths);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludePaths) {
            if (\is_array($this->excludePaths)) {
                $res['ExcludePaths'] = [];
                $n1 = 0;
                foreach ($this->excludePaths as $item1) {
                    $res['ExcludePaths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludePaths'])) {
            if (!empty($map['ExcludePaths'])) {
                $model->excludePaths = [];
                $n1 = 0;
                foreach ($map['ExcludePaths'] as $item1) {
                    $model->excludePaths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
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
