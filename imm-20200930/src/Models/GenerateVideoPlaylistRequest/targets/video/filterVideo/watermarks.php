<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets\video\filterVideo;

use AlibabaCloud\Tea\Model;

class watermarks extends Model
{
    /**
     * @var int
     */
    public $boardWidth;

    /**
     * @var string
     */
    public $borderColor;

    /**
     * @var string
     */
    public $content;

    /**
     * @var float
     */
    public $duration;

    /**
     * @var float
     */
    public $dx;

    /**
     * @var float
     */
    public $dy;

    /**
     * @var float
     */
    public $fontApha;

    /**
     * @var string
     */
    public $fontColor;

    /**
     * @var string
     */
    public $fontName;

    /**
     * @var int
     */
    public $fontSize;

    /**
     * @var float
     */
    public $height;

    /**
     * @var string
     */
    public $referPos;

    /**
     * @var float
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $URI;

    /**
     * @var float
     */
    public $width;
    protected $_name = [
        'boardWidth'  => 'BoardWidth',
        'borderColor' => 'BorderColor',
        'content'     => 'Content',
        'duration'    => 'Duration',
        'dx'          => 'Dx',
        'dy'          => 'Dy',
        'fontApha'    => 'FontApha',
        'fontColor'   => 'FontColor',
        'fontName'    => 'FontName',
        'fontSize'    => 'FontSize',
        'height'      => 'Height',
        'referPos'    => 'ReferPos',
        'startTime'   => 'StartTime',
        'type'        => 'Type',
        'URI'         => 'URI',
        'width'       => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boardWidth) {
            $res['BoardWidth'] = $this->boardWidth;
        }
        if (null !== $this->borderColor) {
            $res['BorderColor'] = $this->borderColor;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->dx) {
            $res['Dx'] = $this->dx;
        }
        if (null !== $this->dy) {
            $res['Dy'] = $this->dy;
        }
        if (null !== $this->fontApha) {
            $res['FontApha'] = $this->fontApha;
        }
        if (null !== $this->fontColor) {
            $res['FontColor'] = $this->fontColor;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->fontSize) {
            $res['FontSize'] = $this->fontSize;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->referPos) {
            $res['ReferPos'] = $this->referPos;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return watermarks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoardWidth'])) {
            $model->boardWidth = $map['BoardWidth'];
        }
        if (isset($map['BorderColor'])) {
            $model->borderColor = $map['BorderColor'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Dx'])) {
            $model->dx = $map['Dx'];
        }
        if (isset($map['Dy'])) {
            $model->dy = $map['Dy'];
        }
        if (isset($map['FontApha'])) {
            $model->fontApha = $map['FontApha'];
        }
        if (isset($map['FontColor'])) {
            $model->fontColor = $map['FontColor'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['FontSize'])) {
            $model->fontSize = $map['FontSize'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ReferPos'])) {
            $model->referPos = $map['ReferPos'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
