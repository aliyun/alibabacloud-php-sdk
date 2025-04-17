<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class OctreeOption extends Model
{
    /**
     * @var bool
     */
    public $doVoxelGridDownDownSampling;

    /**
     * @var string
     */
    public $libraryName;

    /**
     * @var float
     */
    public $octreeResolution;

    /**
     * @var float
     */
    public $pointResolution;
    protected $_name = [
        'doVoxelGridDownDownSampling' => 'DoVoxelGridDownDownSampling',
        'libraryName' => 'LibraryName',
        'octreeResolution' => 'OctreeResolution',
        'pointResolution' => 'PointResolution',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
