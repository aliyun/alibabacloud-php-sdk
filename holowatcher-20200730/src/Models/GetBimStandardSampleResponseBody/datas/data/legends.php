<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardSampleResponseBody\datas\data;

use AlibabaCloud\Tea\Model;

class legends extends Model
{
    /**
     * @description 底标高
     *
     * @var mixed[]
     */
    public $elevationHeight;

    /**
     * @description 标高模式
     *
     * @var string
     */
    public $elevationMode;

    /**
     * @description 标高运算
     *
     * @var string
     */
    public $elevationOperator;

    /**
     * @description 板名
     *
     * @var string
     */
    public $patternName;

    /**
     * @description 板图片
     *
     * @var string
     */
    public $picture;

    /**
     * @description 板厚度
     *
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
