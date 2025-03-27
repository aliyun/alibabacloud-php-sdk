<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class ListTextsRequest extends Model
{
    /**
     * @var string
     */
    public $generationSource;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $textStyleType;

    /**
     * @var string
     */
    public $textTheme;
    protected $_name = [
        'generationSource' => 'generationSource',
        'industry' => 'industry',
        'keyword' => 'keyword',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'publishStatus' => 'publishStatus',
        'textStyleType' => 'textStyleType',
        'textTheme' => 'textTheme',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generationSource) {
            $res['generationSource'] = $this->generationSource;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->publishStatus) {
            $res['publishStatus'] = $this->publishStatus;
        }

        if (null !== $this->textStyleType) {
            $res['textStyleType'] = $this->textStyleType;
        }

        if (null !== $this->textTheme) {
            $res['textTheme'] = $this->textTheme;
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
        if (isset($map['generationSource'])) {
            $model->generationSource = $map['generationSource'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['publishStatus'])) {
            $model->publishStatus = $map['publishStatus'];
        }

        if (isset($map['textStyleType'])) {
            $model->textStyleType = $map['textStyleType'];
        }

        if (isset($map['textTheme'])) {
            $model->textTheme = $map['textTheme'];
        }

        return $model;
    }
}
