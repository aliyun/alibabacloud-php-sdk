<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\cellDetails\cellPoints;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails\cellDetails\cellRect;

class cellDetails extends Model
{
    /**
     * @var int[]
     */
    public $blockList;

    /**
     * @var int
     */
    public $cellAngle;

    /**
     * @var string
     */
    public $cellContent;

    /**
     * @var int
     */
    public $cellId;

    /**
     * @var cellPoints[]
     */
    public $cellPoints;

    /**
     * @var cellRect
     */
    public $cellRect;

    /**
     * @var int
     */
    public $columnEnd;

    /**
     * @var int
     */
    public $columnStart;

    /**
     * @var int
     */
    public $rowEnd;

    /**
     * @var int
     */
    public $rowStart;
    protected $_name = [
        'blockList' => 'BlockList',
        'cellAngle' => 'CellAngle',
        'cellContent' => 'CellContent',
        'cellId' => 'CellId',
        'cellPoints' => 'CellPoints',
        'cellRect' => 'CellRect',
        'columnEnd' => 'ColumnEnd',
        'columnStart' => 'ColumnStart',
        'rowEnd' => 'RowEnd',
        'rowStart' => 'RowStart',
    ];

    public function validate()
    {
        if (\is_array($this->blockList)) {
            Model::validateArray($this->blockList);
        }
        if (\is_array($this->cellPoints)) {
            Model::validateArray($this->cellPoints);
        }
        if (null !== $this->cellRect) {
            $this->cellRect->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockList) {
            if (\is_array($this->blockList)) {
                $res['BlockList'] = [];
                $n1 = 0;
                foreach ($this->blockList as $item1) {
                    $res['BlockList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cellAngle) {
            $res['CellAngle'] = $this->cellAngle;
        }

        if (null !== $this->cellContent) {
            $res['CellContent'] = $this->cellContent;
        }

        if (null !== $this->cellId) {
            $res['CellId'] = $this->cellId;
        }

        if (null !== $this->cellPoints) {
            if (\is_array($this->cellPoints)) {
                $res['CellPoints'] = [];
                $n1 = 0;
                foreach ($this->cellPoints as $item1) {
                    $res['CellPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->cellRect) {
            $res['CellRect'] = null !== $this->cellRect ? $this->cellRect->toArray($noStream) : $this->cellRect;
        }

        if (null !== $this->columnEnd) {
            $res['ColumnEnd'] = $this->columnEnd;
        }

        if (null !== $this->columnStart) {
            $res['ColumnStart'] = $this->columnStart;
        }

        if (null !== $this->rowEnd) {
            $res['RowEnd'] = $this->rowEnd;
        }

        if (null !== $this->rowStart) {
            $res['RowStart'] = $this->rowStart;
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
        if (isset($map['BlockList'])) {
            if (!empty($map['BlockList'])) {
                $model->blockList = [];
                $n1 = 0;
                foreach ($map['BlockList'] as $item1) {
                    $model->blockList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CellAngle'])) {
            $model->cellAngle = $map['CellAngle'];
        }

        if (isset($map['CellContent'])) {
            $model->cellContent = $map['CellContent'];
        }

        if (isset($map['CellId'])) {
            $model->cellId = $map['CellId'];
        }

        if (isset($map['CellPoints'])) {
            if (!empty($map['CellPoints'])) {
                $model->cellPoints = [];
                $n1 = 0;
                foreach ($map['CellPoints'] as $item1) {
                    $model->cellPoints[$n1++] = cellPoints::fromMap($item1);
                }
            }
        }

        if (isset($map['CellRect'])) {
            $model->cellRect = cellRect::fromMap($map['CellRect']);
        }

        if (isset($map['ColumnEnd'])) {
            $model->columnEnd = $map['ColumnEnd'];
        }

        if (isset($map['ColumnStart'])) {
            $model->columnStart = $map['ColumnStart'];
        }

        if (isset($map['RowEnd'])) {
            $model->rowEnd = $map['RowEnd'];
        }

        if (isset($map['RowStart'])) {
            $model->rowStart = $map['RowStart'];
        }

        return $model;
    }
}
