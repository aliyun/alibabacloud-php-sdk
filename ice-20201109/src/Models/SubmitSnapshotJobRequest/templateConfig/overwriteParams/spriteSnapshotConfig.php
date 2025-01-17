<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitSnapshotJobRequest\templateConfig\overwriteParams;

use AlibabaCloud\Dara\Model;

class spriteSnapshotConfig extends Model
{
    /**
     * @var int
     */
    public $cellHeight;
    /**
     * @var int
     */
    public $cellWidth;
    /**
     * @var string
     */
    public $color;
    /**
     * @var int
     */
    public $columns;
    /**
     * @var int
     */
    public $lines;
    /**
     * @var int
     */
    public $margin;
    /**
     * @var int
     */
    public $padding;
    protected $_name = [
        'cellHeight' => 'CellHeight',
        'cellWidth'  => 'CellWidth',
        'color'      => 'Color',
        'columns'    => 'Columns',
        'lines'      => 'Lines',
        'margin'     => 'Margin',
        'padding'    => 'Padding',
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
