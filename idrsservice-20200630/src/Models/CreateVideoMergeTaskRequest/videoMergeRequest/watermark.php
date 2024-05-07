<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateVideoMergeTaskRequest\videoMergeRequest;

use AlibabaCloud\Tea\Model;

class watermark extends Model
{
    /**
     * @example 14803425
     *
     * @var string
     */
    public $fontColor;

    /**
     * @example 20
     *
     * @var int
     */
    public $fontSize;

    /**
     * @example 100
     *
     * @var int
     */
    public $positionX;

    /**
     * @example 400
     *
     * @var int
     */
    public $positionY;

    /**
     * @var string
     */
    public $text;

    /**
     * @example 1617245014
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'fontColor' => 'FontColor',
        'fontSize'  => 'FontSize',
        'positionX' => 'PositionX',
        'positionY' => 'PositionY',
        'text'      => 'Text',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }
        if (null !== $this->positionX) {
            $res['PositionX'] = $this->positionX;
        }
        if (null !== $this->positionY) {
            $res['PositionY'] = $this->positionY;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }
        if (isset($map['PositionX'])) {
            $model->positionX = $map['PositionX'];
        }
        if (isset($map['PositionY'])) {
            $model->positionY = $map['PositionY'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
