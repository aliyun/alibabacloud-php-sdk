<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySnapshotJobListResponseBody\snapshotJobList\snapshotJob\snapshotConfig;

use AlibabaCloud\Tea\Model;

class tileOut extends Model
{
    /**
     * @var string
     */
    public $padding;

    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $cellSelStep;

    /**
     * @var string
     */
    public $cellHeight;

    /**
     * @var string
     */
    public $cellWidth;

    /**
     * @var string
     */
    public $margin;

    /**
     * @var string
     */
    public $columns;

    /**
     * @var string
     */
    public $isKeepCellPic;

    /**
     * @var string
     */
    public $lines;
    protected $_name = [
        'padding'       => 'Padding',
        'color'         => 'Color',
        'cellSelStep'   => 'CellSelStep',
        'cellHeight'    => 'CellHeight',
        'cellWidth'     => 'CellWidth',
        'margin'        => 'Margin',
        'columns'       => 'Columns',
        'isKeepCellPic' => 'IsKeepCellPic',
        'lines'         => 'Lines',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->padding) {
            $res['Padding'] = $this->padding;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->cellSelStep) {
            $res['CellSelStep'] = $this->cellSelStep;
        }
        if (null !== $this->cellHeight) {
            $res['CellHeight'] = $this->cellHeight;
        }
        if (null !== $this->cellWidth) {
            $res['CellWidth'] = $this->cellWidth;
        }
        if (null !== $this->margin) {
            $res['Margin'] = $this->margin;
        }
        if (null !== $this->columns) {
            $res['Columns'] = $this->columns;
        }
        if (null !== $this->isKeepCellPic) {
            $res['IsKeepCellPic'] = $this->isKeepCellPic;
        }
        if (null !== $this->lines) {
            $res['Lines'] = $this->lines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tileOut
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Padding'])) {
            $model->padding = $map['Padding'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['CellSelStep'])) {
            $model->cellSelStep = $map['CellSelStep'];
        }
        if (isset($map['CellHeight'])) {
            $model->cellHeight = $map['CellHeight'];
        }
        if (isset($map['CellWidth'])) {
            $model->cellWidth = $map['CellWidth'];
        }
        if (isset($map['Margin'])) {
            $model->margin = $map['Margin'];
        }
        if (isset($map['Columns'])) {
            $model->columns = $map['Columns'];
        }
        if (isset($map['IsKeepCellPic'])) {
            $model->isKeepCellPic = $map['IsKeepCellPic'];
        }
        if (isset($map['Lines'])) {
            $model->lines = $map['Lines'];
        }

        return $model;
    }
}
