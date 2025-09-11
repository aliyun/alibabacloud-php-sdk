<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\tableInfos\cellInfos;

class tableInfos extends Model
{
    /**
     * @var cellInfos[]
     */
    public $cellInfos;

    /**
     * @var int
     */
    public $tableId;

    /**
     * @var int
     */
    public $xCellSize;

    /**
     * @var int
     */
    public $yCellSize;
    protected $_name = [
        'cellInfos' => 'cellInfos',
        'tableId' => 'tableId',
        'xCellSize' => 'xCellSize',
        'yCellSize' => 'yCellSize',
    ];

    public function validate()
    {
        if (\is_array($this->cellInfos)) {
            Model::validateArray($this->cellInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cellInfos) {
            if (\is_array($this->cellInfos)) {
                $res['cellInfos'] = [];
                $n1 = 0;
                foreach ($this->cellInfos as $item1) {
                    $res['cellInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableId) {
            $res['tableId'] = $this->tableId;
        }

        if (null !== $this->xCellSize) {
            $res['xCellSize'] = $this->xCellSize;
        }

        if (null !== $this->yCellSize) {
            $res['yCellSize'] = $this->yCellSize;
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
        if (isset($map['cellInfos'])) {
            if (!empty($map['cellInfos'])) {
                $model->cellInfos = [];
                $n1 = 0;
                foreach ($map['cellInfos'] as $item1) {
                    $model->cellInfos[$n1] = cellInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tableId'])) {
            $model->tableId = $map['tableId'];
        }

        if (isset($map['xCellSize'])) {
            $model->xCellSize = $map['xCellSize'];
        }

        if (isset($map['yCellSize'])) {
            $model->yCellSize = $map['yCellSize'];
        }

        return $model;
    }
}
