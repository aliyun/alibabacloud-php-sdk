<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\boundingBoxes\downLeft;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\boundingBoxes\downRight;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\boundingBoxes\upLeft;
use AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetImageTranslateTaskResponseBody\data\translation\boundingBoxes\upRight;

class boundingBoxes extends Model
{
    /**
     * @var float
     */
    public $confidence;

    /**
     * @var int
     */
    public $direction;

    /**
     * @var downLeft
     */
    public $downLeft;

    /**
     * @var downRight
     */
    public $downRight;

    /**
     * @var int
     */
    public $tableCellId;

    /**
     * @var int
     */
    public $tableId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var mixed[]
     */
    public $translation;

    /**
     * @var upLeft
     */
    public $upLeft;

    /**
     * @var upRight
     */
    public $upRight;
    protected $_name = [
        'confidence' => 'confidence',
        'direction' => 'direction',
        'downLeft' => 'downLeft',
        'downRight' => 'downRight',
        'tableCellId' => 'tableCellId',
        'tableId' => 'tableId',
        'text' => 'text',
        'translation' => 'translation',
        'upLeft' => 'upLeft',
        'upRight' => 'upRight',
    ];

    public function validate()
    {
        if (null !== $this->downLeft) {
            $this->downLeft->validate();
        }
        if (null !== $this->downRight) {
            $this->downRight->validate();
        }
        if (\is_array($this->translation)) {
            Model::validateArray($this->translation);
        }
        if (null !== $this->upLeft) {
            $this->upLeft->validate();
        }
        if (null !== $this->upRight) {
            $this->upRight->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['confidence'] = $this->confidence;
        }

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->downLeft) {
            $res['downLeft'] = null !== $this->downLeft ? $this->downLeft->toArray($noStream) : $this->downLeft;
        }

        if (null !== $this->downRight) {
            $res['downRight'] = null !== $this->downRight ? $this->downRight->toArray($noStream) : $this->downRight;
        }

        if (null !== $this->tableCellId) {
            $res['tableCellId'] = $this->tableCellId;
        }

        if (null !== $this->tableId) {
            $res['tableId'] = $this->tableId;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->translation) {
            if (\is_array($this->translation)) {
                $res['translation'] = [];
                foreach ($this->translation as $key1 => $value1) {
                    $res['translation'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->upLeft) {
            $res['upLeft'] = null !== $this->upLeft ? $this->upLeft->toArray($noStream) : $this->upLeft;
        }

        if (null !== $this->upRight) {
            $res['upRight'] = null !== $this->upRight ? $this->upRight->toArray($noStream) : $this->upRight;
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
        if (isset($map['confidence'])) {
            $model->confidence = $map['confidence'];
        }

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['downLeft'])) {
            $model->downLeft = downLeft::fromMap($map['downLeft']);
        }

        if (isset($map['downRight'])) {
            $model->downRight = downRight::fromMap($map['downRight']);
        }

        if (isset($map['tableCellId'])) {
            $model->tableCellId = $map['tableCellId'];
        }

        if (isset($map['tableId'])) {
            $model->tableId = $map['tableId'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['translation'])) {
            if (!empty($map['translation'])) {
                $model->translation = [];
                foreach ($map['translation'] as $key1 => $value1) {
                    $model->translation[$key1] = $value1;
                }
            }
        }

        if (isset($map['upLeft'])) {
            $model->upLeft = upLeft::fromMap($map['upLeft']);
        }

        if (isset($map['upRight'])) {
            $model->upRight = upRight::fromMap($map['upRight']);
        }

        return $model;
    }
}
