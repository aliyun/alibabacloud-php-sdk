<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitSnapshotJobResponseBody\snapshotJob\snapshotConfig;

use AlibabaCloud\Dara\Model;

class tileOut extends Model
{
    /**
     * @var string
     */
    public $cellHeight;

    /**
     * @var string
     */
    public $cellSelStep;

    /**
     * @var string
     */
    public $cellWidth;

    /**
     * @var string
     */
    public $color;

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

    /**
     * @var string
     */
    public $margin;

    /**
     * @var string
     */
    public $padding;
    protected $_name = [
        'cellHeight' => 'CellHeight',
        'cellSelStep' => 'CellSelStep',
        'cellWidth' => 'CellWidth',
        'color' => 'Color',
        'columns' => 'Columns',
        'isKeepCellPic' => 'IsKeepCellPic',
        'lines' => 'Lines',
        'margin' => 'Margin',
        'padding' => 'Padding',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cellHeight) {
            $res['CellHeight'] = $this->cellHeight;
        }

        if (null !== $this->cellSelStep) {
            $res['CellSelStep'] = $this->cellSelStep;
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

        if (null !== $this->isKeepCellPic) {
            $res['IsKeepCellPic'] = $this->isKeepCellPic;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CellHeight'])) {
            $model->cellHeight = $map['CellHeight'];
        }

        if (isset($map['CellSelStep'])) {
            $model->cellSelStep = $map['CellSelStep'];
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

        if (isset($map['IsKeepCellPic'])) {
            $model->isKeepCellPic = $map['IsKeepCellPic'];
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
