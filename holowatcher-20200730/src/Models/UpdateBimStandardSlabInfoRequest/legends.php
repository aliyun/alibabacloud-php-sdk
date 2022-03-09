<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\UpdateBimStandardSlabInfoRequest;

use AlibabaCloud\Tea\Model;

class legends extends Model
{
    /**
     * @var string
     */
    public $elevationHeight;

    /**
     * @var string
     */
    public $elevationMode;

    /**
     * @var string
     */
    public $elevationOperator;

    /**
     * @var string
     */
    public $patternName;

    /**
     * @var string
     */
    public $picture;

    /**
     * @var int
     */
    public $thickness;
    protected $_name = [
        'elevationHeight'   => 'ElevationHeight',
        'elevationMode'     => 'ElevationMode',
        'elevationOperator' => 'ElevationOperator',
        'patternName'       => 'PatternName',
        'picture'           => 'Picture',
        'thickness'         => 'Thickness',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elevationHeight) {
            $res['ElevationHeight'] = $this->elevationHeight;
        }
        if (null !== $this->elevationMode) {
            $res['ElevationMode'] = $this->elevationMode;
        }
        if (null !== $this->elevationOperator) {
            $res['ElevationOperator'] = $this->elevationOperator;
        }
        if (null !== $this->patternName) {
            $res['PatternName'] = $this->patternName;
        }
        if (null !== $this->picture) {
            $res['Picture'] = $this->picture;
        }
        if (null !== $this->thickness) {
            $res['Thickness'] = $this->thickness;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return legends
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElevationHeight'])) {
            $model->elevationHeight = $map['ElevationHeight'];
        }
        if (isset($map['ElevationMode'])) {
            $model->elevationMode = $map['ElevationMode'];
        }
        if (isset($map['ElevationOperator'])) {
            $model->elevationOperator = $map['ElevationOperator'];
        }
        if (isset($map['PatternName'])) {
            $model->patternName = $map['PatternName'];
        }
        if (isset($map['Picture'])) {
            $model->picture = $map['Picture'];
        }
        if (isset($map['Thickness'])) {
            $model->thickness = $map['Thickness'];
        }

        return $model;
    }
}
