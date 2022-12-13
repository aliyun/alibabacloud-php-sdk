<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class OctreeOption extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $doVoxelGridDownDownSampling;

    /**
     * @example pcl
     *
     * @var string
     */
    public $libraryName;

    /**
     * @example 0.01
     *
     * @var float
     */
    public $octreeResolution;

    /**
     * @example 0.01
     *
     * @var float
     */
    public $pointResolution;
    protected $_name = [
        'doVoxelGridDownDownSampling' => 'DoVoxelGridDownDownSampling',
        'libraryName'                 => 'LibraryName',
        'octreeResolution'            => 'OctreeResolution',
        'pointResolution'             => 'PointResolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->doVoxelGridDownDownSampling) {
            $res['DoVoxelGridDownDownSampling'] = $this->doVoxelGridDownDownSampling;
        }
        if (null !== $this->libraryName) {
            $res['LibraryName'] = $this->libraryName;
        }
        if (null !== $this->octreeResolution) {
            $res['OctreeResolution'] = $this->octreeResolution;
        }
        if (null !== $this->pointResolution) {
            $res['PointResolution'] = $this->pointResolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OctreeOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DoVoxelGridDownDownSampling'])) {
            $model->doVoxelGridDownDownSampling = $map['DoVoxelGridDownDownSampling'];
        }
        if (isset($map['LibraryName'])) {
            $model->libraryName = $map['LibraryName'];
        }
        if (isset($map['OctreeResolution'])) {
            $model->octreeResolution = $map['OctreeResolution'];
        }
        if (isset($map['PointResolution'])) {
            $model->pointResolution = $map['PointResolution'];
        }

        return $model;
    }
}
