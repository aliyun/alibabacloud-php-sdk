<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models\QueryDocParserStatusResponseBody\data\outputFormatResult;

use AlibabaCloud\Dara\Model;

class pages extends Model
{
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
    public $pageIdAllDocs;

    /**
     * @var int
     */
    public $pageIdCurDoc;
    protected $_name = [
        'imageHeight' => 'ImageHeight',
        'imageUrl' => 'ImageUrl',
        'imageWidth' => 'ImageWidth',
        'pageIdAllDocs' => 'PageIdAllDocs',
        'pageIdCurDoc' => 'PageIdCurDoc',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageHeight) {
            $res['ImageHeight'] = $this->imageHeight;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->imageWidth) {
            $res['ImageWidth'] = $this->imageWidth;
        }

        if (null !== $this->pageIdAllDocs) {
            $res['PageIdAllDocs'] = $this->pageIdAllDocs;
        }

        if (null !== $this->pageIdCurDoc) {
            $res['PageIdCurDoc'] = $this->pageIdCurDoc;
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
        if (isset($map['ImageHeight'])) {
            $model->imageHeight = $map['ImageHeight'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['ImageWidth'])) {
            $model->imageWidth = $map['ImageWidth'];
        }

        if (isset($map['PageIdAllDocs'])) {
            $model->pageIdAllDocs = $map['PageIdAllDocs'];
        }

        if (isset($map['PageIdCurDoc'])) {
            $model->pageIdCurDoc = $map['PageIdCurDoc'];
        }

        return $model;
    }
}
