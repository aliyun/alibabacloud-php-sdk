<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardSlabInfoRequest\legends;
use AlibabaCloud\Tea\Model;

class UpdateBimStandardSlabInfoRequest extends Model
{
    /**
     * @var legends[]
     */
    public $legends;

    /**
     * @var string
     */
    public $rootDir;

    /**
     * @var int
     */
    public $standardId;

    /**
     * @description 任务id
     *
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $thickness;
    protected $_name = [
        'legends'    => 'Legends',
        'rootDir'    => 'RootDir',
        'standardId' => 'StandardId',
        'taskId'     => 'TaskId',
        'thickness'  => 'Thickness',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->legends) {
            $res['Legends'] = [];
            if (null !== $this->legends && \is_array($this->legends)) {
                $n = 0;
                foreach ($this->legends as $item) {
                    $res['Legends'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rootDir) {
            $res['RootDir'] = $this->rootDir;
        }
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->thickness) {
            $res['Thickness'] = $this->thickness;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBimStandardSlabInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Legends'])) {
            if (!empty($map['Legends'])) {
                $model->legends = [];
                $n              = 0;
                foreach ($map['Legends'] as $item) {
                    $model->legends[$n++] = null !== $item ? legends::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RootDir'])) {
            $model->rootDir = $map['RootDir'];
        }
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Thickness'])) {
            $model->thickness = $map['Thickness'];
        }

        return $model;
    }
}
