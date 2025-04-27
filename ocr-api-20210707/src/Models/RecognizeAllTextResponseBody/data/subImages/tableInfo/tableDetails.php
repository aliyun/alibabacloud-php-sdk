<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\cellDetails;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\footer;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\header;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\tablePoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\tableRect;

class tableDetails extends Model
{
    /**
     * @var int
     */
    public $cellCount;

    /**
     * @var cellDetails[]
     */
    public $cellDetails;

    /**
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
     * @var int
     */
    public $rowCount;

    /**
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
        'cellCount' => 'CellCount',
        'cellDetails' => 'CellDetails',
        'columnCount' => 'ColumnCount',
        'footer' => 'Footer',
        'header' => 'Header',
        'rowCount' => 'RowCount',
        'tableId' => 'TableId',
        'tablePoints' => 'TablePoints',
        'tableRect' => 'TableRect',
    ];

    public function validate()
    {
        if (\is_array($this->cellDetails)) {
            Model::validateArray($this->cellDetails);
        }
        if (null !== $this->footer) {
            $this->footer->validate();
        }
        if (null !== $this->header) {
            $this->header->validate();
        }
        if (\is_array($this->tablePoints)) {
            Model::validateArray($this->tablePoints);
        }
        if (null !== $this->tableRect) {
            $this->tableRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cellCount) {
            $res['CellCount'] = $this->cellCount;
        }

        if (null !== $this->cellDetails) {
            if (\is_array($this->cellDetails)) {
                $res['CellDetails'] = [];
                $n1 = 0;
                foreach ($this->cellDetails as $item1) {
                    $res['CellDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->columnCount) {
            $res['ColumnCount'] = $this->columnCount;
        }

        if (null !== $this->footer) {
            $res['Footer'] = null !== $this->footer ? $this->footer->toArray($noStream) : $this->footer;
        }

        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toArray($noStream) : $this->header;
        }

        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }

        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        if (null !== $this->tablePoints) {
            if (\is_array($this->tablePoints)) {
                $res['TablePoints'] = [];
                $n1 = 0;
                foreach ($this->tablePoints as $item1) {
                    $res['TablePoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tableRect) {
            $res['TableRect'] = null !== $this->tableRect ? $this->tableRect->toArray($noStream) : $this->tableRect;
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
        if (isset($map['CellCount'])) {
            $model->cellCount = $map['CellCount'];
        }

        if (isset($map['CellDetails'])) {
            if (!empty($map['CellDetails'])) {
                $model->cellDetails = [];
                $n1 = 0;
                foreach ($map['CellDetails'] as $item1) {
                    $model->cellDetails[$n1++] = cellDetails::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['TablePoints'] as $item1) {
                    $model->tablePoints[$n1++] = tablePoints::fromMap($item1);
                }
            }
        }

        if (isset($map['TableRect'])) {
            $model->tableRect = tableRect::fromMap($map['TableRect']);
        }

        return $model;
    }
}
