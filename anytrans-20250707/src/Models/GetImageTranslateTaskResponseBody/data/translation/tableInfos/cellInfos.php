<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\tableInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\tableInfos\cellInfos\pos;

class cellInfos extends Model
{
    /**
     * @var pos[]
     */
    public $pos;

    /**
     * @var int
     */
    public $tableCellId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var int
     */
    public $xec;

    /**
     * @var int
     */
    public $xsc;

    /**
     * @var int
     */
    public $yec;

    /**
     * @var int
     */
    public $ysc;
    protected $_name = [
        'pos' => 'pos',
        'tableCellId' => 'tableCellId',
        'text' => 'text',
        'xec' => 'xec',
        'xsc' => 'xsc',
        'yec' => 'yec',
        'ysc' => 'ysc',
    ];

    public function validate()
    {
        if (\is_array($this->pos)) {
            Model::validateArray($this->pos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pos) {
            if (\is_array($this->pos)) {
                $res['pos'] = [];
                $n1 = 0;
                foreach ($this->pos as $item1) {
                    $res['pos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableCellId) {
            $res['tableCellId'] = $this->tableCellId;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->xec) {
            $res['xec'] = $this->xec;
        }

        if (null !== $this->xsc) {
            $res['xsc'] = $this->xsc;
        }

        if (null !== $this->yec) {
            $res['yec'] = $this->yec;
        }

        if (null !== $this->ysc) {
            $res['ysc'] = $this->ysc;
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
        if (isset($map['pos'])) {
            if (!empty($map['pos'])) {
                $model->pos = [];
                $n1 = 0;
                foreach ($map['pos'] as $item1) {
                    $model->pos[$n1] = pos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tableCellId'])) {
            $model->tableCellId = $map['tableCellId'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['xec'])) {
            $model->xec = $map['xec'];
        }

        if (isset($map['xsc'])) {
            $model->xsc = $map['xsc'];
        }

        if (isset($map['yec'])) {
            $model->yec = $map['yec'];
        }

        if (isset($map['ysc'])) {
            $model->ysc = $map['ysc'];
        }

        return $model;
    }
}
