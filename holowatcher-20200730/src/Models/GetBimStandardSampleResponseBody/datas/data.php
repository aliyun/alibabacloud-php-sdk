<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardSampleResponseBody\datas;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardSampleResponseBody\datas\data\legends;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var legends[]
     */
    public $legends;

    /**
     * @description 根文件夹
     *
     * @var string
     */
    public $rootDir;

    /**
     * @description 默认厚度
     *
     * @var int
     */
    public $thickness;
    protected $_name = [
        'legends'   => 'Legends',
        'rootDir'   => 'RootDir',
        'thickness' => 'Thickness',
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
        if (null !== $this->thickness) {
            $res['Thickness'] = $this->thickness;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['Thickness'])) {
            $model->thickness = $map['Thickness'];
        }

        return $model;
    }
}
