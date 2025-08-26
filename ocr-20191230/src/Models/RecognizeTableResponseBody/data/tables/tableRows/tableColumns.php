<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables\tableRows;

use AlibabaCloud\Dara\Model;

class tableColumns extends Model
{
    /**
     * @var int
     */
    public $endColumn;

    /**
     * @var int
     */
    public $endRow;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $startColumn;

    /**
     * @var int
     */
    public $startRow;

    /**
     * @var string[]
     */
    public $texts;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'endColumn' => 'EndColumn',
        'endRow' => 'EndRow',
        'height' => 'Height',
        'startColumn' => 'StartColumn',
        'startRow' => 'StartRow',
        'texts' => 'Texts',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endColumn) {
            $res['EndColumn'] = $this->endColumn;
        }

        if (null !== $this->endRow) {
            $res['EndRow'] = $this->endRow;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->startColumn) {
            $res['StartColumn'] = $this->startColumn;
        }

        if (null !== $this->startRow) {
            $res['StartRow'] = $this->startRow;
        }

        if (null !== $this->texts) {
            if (\is_array($this->texts)) {
                $res['Texts'] = [];
                $n1 = 0;
                foreach ($this->texts as $item1) {
                    $res['Texts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['EndColumn'])) {
            $model->endColumn = $map['EndColumn'];
        }

        if (isset($map['EndRow'])) {
            $model->endRow = $map['EndRow'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['StartColumn'])) {
            $model->startColumn = $map['StartColumn'];
        }

        if (isset($map['StartRow'])) {
            $model->startRow = $map['StartRow'];
        }

        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n1 = 0;
                foreach ($map['Texts'] as $item1) {
                    $model->texts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
