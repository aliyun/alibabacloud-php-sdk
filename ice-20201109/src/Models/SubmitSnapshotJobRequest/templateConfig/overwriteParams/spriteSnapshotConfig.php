<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig\overwriteParams;

use AlibabaCloud\Tea\Model;

class spriteSnapshotConfig extends Model
{
    /**
     * @description The height of a single snapshot before tiling. The default value is the height of the output snapshot.
     *
     * @example 480
     *
     * @var int
     */
    public $cellHeight;

    /**
     * @description The width of a single snapshot before tiling. The default value is the width of the output snapshot.
     *
     * @example 720
     *
     * @var int
     */
    public $cellWidth;

    /**
     * @description The background color.
     *
     * @example #000000
     *
     * @var string
     */
    public $color;

    /**
     * @description The number of columns that the image sprite contains.
     *
     * @example 20
     *
     * @var int
     */
    public $columns;

    /**
     * @description The number of rows that the image sprite contains.
     *
     * @example 20
     *
     * @var int
     */
    public $lines;

    /**
     * @description The width of the frame. Default value: 0. Unit: pixels.
     *
     * @example 20
     *
     * @var int
     */
    public $margin;

    /**
     * @description The spacing between two adjacent snapshots. Default value: 0. Unit: pixels.
     *
     * @example 20
     *
     * @var int
     */
    public $padding;
    protected $_name = [
        'cellHeight' => 'CellHeight',
        'cellWidth' => 'CellWidth',
        'color' => 'Color',
        'columns' => 'Columns',
        'lines' => 'Lines',
        'margin' => 'Margin',
        'padding' => 'Padding',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cellHeight) {
            $res['CellHeight'] = $this->cellHeight;
        }
        if (null !== $this->cellWidth) {
            $res['CellWidth'] = $this->cellWidth;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->columns) {
            $res['Columns'] = $this->columns;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }
        if (null !== $this->margin) {
            $res['Margin'] = $this->margin;
        }
        if (null !== $this->padding) {
            $res['Padding'] = $this->padding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spriteSnapshotConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CellHeight'])) {
            $model->cellHeight = $map['CellHeight'];
        }
        if (isset($map['CellWidth'])) {
            $model->cellWidth = $map['CellWidth'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['Columns'])) {
            $model->columns = $map['Columns'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }
        if (isset($map['Margin'])) {
            $model->margin = $map['Margin'];
        }
        if (isset($map['Padding'])) {
            $model->padding = $map['Padding'];
        }

        return $model;
    }
}
