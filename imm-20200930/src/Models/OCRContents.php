<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class OCRContents extends Model
{
    /**
     * @description Boundary
     *
     * @var Boundary
     */
    public $boundary;

    /**
     * @description Confidence
     *
     * @var float
     */
    public $confidence;

    /**
     * @description Contents
     *
     * @var string
     */
    public $contents;

    /**
     * @description Language
     *
     * @var string
     */
    public $language;
    protected $_name = [
        'boundary'   => 'Boundary',
        'confidence' => 'Confidence',
        'contents'   => 'Contents',
        'language'   => 'Language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OCRContents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boundary'])) {
            $model->boundary = Boundary::fromMap($map['Boundary']);
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Contents'])) {
            $model->contents = $map['Contents'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
