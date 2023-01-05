<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeTableResponseBody\data\tables\tableRows;

use AlibabaCloud\Tea\Model;

class tableColumns extends Model
{
    /**
     * @example 4
     *
     * @var int
     */
    public $endColumn;

    /**
     * @example 1
     *
     * @var int
     */
    public $endRow;

    /**
     * @example 0
     *
     * @var int
     */
    public $height;

    /**
     * @example 1
     *
     * @var int
     */
    public $startColumn;

    /**
     * @example 0
     *
     * @var int
     */
    public $startRow;

    /**
     * @var string[]
     */
    public $texts;

    /**
     * @example 0
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'endColumn'   => 'EndColumn',
        'endRow'      => 'EndRow',
        'height'      => 'Height',
        'startColumn' => 'StartColumn',
        'startRow'    => 'StartRow',
        'texts'       => 'Texts',
        'width'       => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Texts'] = $this->texts;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
                $model->texts = $map['Texts'];
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
