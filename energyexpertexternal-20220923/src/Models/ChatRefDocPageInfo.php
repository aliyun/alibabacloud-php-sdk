<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class ChatRefDocPageInfo extends Model
{
    /**
     * @var float
     */
    public $angle;

    /**
     * @var string
     */
    public $excelParseResult;

    /**
     * @var int
     */
    public $imageHeight;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var int
     */
    public $imageWidth;

    /**
     * @var int
     */
    public $pageIdCurDoc;

    /**
     * @var string
     */
    public $pdfParseResult;

    /**
     * @var string
     */
    public $wordParseResult;
    protected $_name = [
        'angle' => 'angle',
        'excelParseResult' => 'excelParseResult',
        'imageHeight' => 'imageHeight',
        'imageUrl' => 'imageUrl',
        'imageWidth' => 'imageWidth',
        'pageIdCurDoc' => 'pageIdCurDoc',
        'pdfParseResult' => 'pdfParseResult',
        'wordParseResult' => 'wordParseResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['angle'] = $this->angle;
        }

        if (null !== $this->excelParseResult) {
            $res['excelParseResult'] = $this->excelParseResult;
        }

        if (null !== $this->imageHeight) {
            $res['imageHeight'] = $this->imageHeight;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->imageWidth) {
            $res['imageWidth'] = $this->imageWidth;
        }

        if (null !== $this->pageIdCurDoc) {
            $res['pageIdCurDoc'] = $this->pageIdCurDoc;
        }

        if (null !== $this->pdfParseResult) {
            $res['pdfParseResult'] = $this->pdfParseResult;
        }

        if (null !== $this->wordParseResult) {
            $res['wordParseResult'] = $this->wordParseResult;
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
        if (isset($map['angle'])) {
            $model->angle = $map['angle'];
        }

        if (isset($map['excelParseResult'])) {
            $model->excelParseResult = $map['excelParseResult'];
        }

        if (isset($map['imageHeight'])) {
            $model->imageHeight = $map['imageHeight'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['imageWidth'])) {
            $model->imageWidth = $map['imageWidth'];
        }

        if (isset($map['pageIdCurDoc'])) {
            $model->pageIdCurDoc = $map['pageIdCurDoc'];
        }

        if (isset($map['pdfParseResult'])) {
            $model->pdfParseResult = $map['pdfParseResult'];
        }

        if (isset($map['wordParseResult'])) {
            $model->wordParseResult = $map['wordParseResult'];
        }

        return $model;
    }
}
