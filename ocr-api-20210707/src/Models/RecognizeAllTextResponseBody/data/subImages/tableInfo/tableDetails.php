<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\cellDetails;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\footer;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\header;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\tablePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\tableRect;
use AlibabaCloud\Tea\Model;

class tableDetails extends Model
{
    /**
     * @example 29
     *
     * @var int
     */
    public $cellCount;

    /**
     * @var cellDetails[]
     */
    public $cellDetails;

    /**
     * @example 3
     *
     * @var int
     */
    public $columnCount;

    /**
     * @var footer
     */
    public $footer;

    /**
     * @var header
     */
    public $header;

    /**
     * @example 10
     *
     * @var int
     */
    public $rowCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $tableId;

    /**
     * @var tablePoints[]
     */
    public $tablePoints;

    /**
     * @var tableRect
     */
    public $tableRect;
    protected $_name = [
        'cellCount'   => 'CellCount',
        'cellDetails' => 'CellDetails',
        'columnCount' => 'ColumnCount',
        'footer'      => 'Footer',
        'header'      => 'Header',
        'rowCount'    => 'RowCount',
        'tableId'     => 'TableId',
        'tablePoints' => 'TablePoints',
        'tableRect'   => 'TableRect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cellCount) {
            $res['CellCount'] = $this->cellCount;
        }
        if (null !== $this->cellDetails) {
            $res['CellDetails'] = [];
            if (null !== $this->cellDetails && \is_array($this->cellDetails)) {
                $n = 0;
                foreach ($this->cellDetails as $item) {
                    $res['CellDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }
        if (null !== $this->footer) {
            $res['Footer'] = null !== $this->footer ? $this->footer->toMap() : null;
        }
        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tablePoints) {
            $res['TablePoints'] = [];
            if (null !== $this->tablePoints && \is_array($this->tablePoints)) {
                $n = 0;
                foreach ($this->tablePoints as $item) {
                    $res['TablePoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableRect) {
            $res['TableRect'] = null !== $this->tableRect ? $this->tableRect->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CellCount'])) {
            $model->cellCount = $map['CellCount'];
        }
        if (isset($map['CellDetails'])) {
            if (!empty($map['CellDetails'])) {
                $model->cellDetails = [];
                $n                  = 0;
                foreach ($map['CellDetails'] as $item) {
                    $model->cellDetails[$n++] = null !== $item ? cellDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ColumnCount'])) {
            $model->columnCount = $map['ColumnCount'];
        }
        if (isset($map['Footer'])) {
            $model->footer = footer::fromMap($map['Footer']);
        }
        if (isset($map['Header'])) {
            $model->header = header::fromMap($map['Header']);
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['TablePoints'])) {
            if (!empty($map['TablePoints'])) {
                $model->tablePoints = [];
                $n                  = 0;
                foreach ($map['TablePoints'] as $item) {
                    $model->tablePoints[$n++] = null !== $item ? tablePoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableRect'])) {
            $model->tableRect = tableRect::fromMap($map['TableRect']);
        }

        return $model;
    }
}
