<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables\tableRows;

use AlibabaCloud\Tea\Model;

class tableColumns extends Model
{
    /**
     * @var int
     */
    public $endRow;

    /**
     * @var int
     */
    public $endColumn;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string[]
     */
    public $texts;

    /**
     * @var int
     */
    public $startRow;

    /**
     * @var int
     */
    public $startColumn;
    protected $_name = [
        'endRow'      => 'EndRow',
        'endColumn'   => 'EndColumn',
        'width'       => 'Width',
        'height'      => 'Height',
        'texts'       => 'Texts',
        'startRow'    => 'StartRow',
        'startColumn' => 'StartColumn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endRow) {
            $res['EndRow'] = $this->endRow;
        }
        if (null !== $this->endColumn) {
            $res['EndColumn'] = $this->endColumn;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->texts) {
            $res['Texts'] = $this->texts;
        }
        if (null !== $this->startRow) {
            $res['StartRow'] = $this->startRow;
        }
        if (null !== $this->startColumn) {
            $res['StartColumn'] = $this->startColumn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableColumns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndRow'])) {
            $model->endRow = $map['EndRow'];
        }
        if (isset($map['EndColumn'])) {
            $model->endColumn = $map['EndColumn'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = $map['Texts'];
            }
        }
        if (isset($map['StartRow'])) {
            $model->startRow = $map['StartRow'];
        }
        if (isset($map['StartColumn'])) {
            $model->startColumn = $map['StartColumn'];
        }

        return $model;
    }
}
