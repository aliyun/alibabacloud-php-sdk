<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesResponseBody\frames;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesResponseBody\frames\OCR\OCRBoundary;
use AlibabaCloud\Tea\Model;

class OCR extends Model
{
    /**
     * @var OCRBoundary
     */
    public $OCRBoundary;

    /**
     * @var float
     */
    public $OCRConfidence;

    /**
     * @var string
     */
    public $OCRContents;
    protected $_name = [
        'OCRBoundary'   => 'OCRBoundary',
        'OCRConfidence' => 'OCRConfidence',
        'OCRContents'   => 'OCRContents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->OCRBoundary) {
            $res['OCRBoundary'] = null !== $this->OCRBoundary ? $this->OCRBoundary->toMap() : null;
        }
        if (null !== $this->OCRConfidence) {
            $res['OCRConfidence'] = $this->OCRConfidence;
        }
        if (null !== $this->OCRContents) {
            $res['OCRContents'] = $this->OCRContents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OCR
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OCRBoundary'])) {
            $model->OCRBoundary = OCRBoundary::fromMap($map['OCRBoundary']);
        }
        if (isset($map['OCRConfidence'])) {
            $model->OCRConfidence = $map['OCRConfidence'];
        }
        if (isset($map['OCRContents'])) {
            $model->OCRContents = $map['OCRContents'];
        }

        return $model;
    }
}
