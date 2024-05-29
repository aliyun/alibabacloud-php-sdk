<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class ListTextsRequest extends Model
{
    /**
     * @example API
     *
     * @var string
     */
    public $generationSource;

    /**
     * @example Common
     *
     * @var string
     */
    public $industry;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example PUBLISH
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @example WECHAT_MOMENT
     *
     * @var string
     */
    public $textStyleType;

    /**
     * @example xxx
     *
     * @var string
     */
    public $textTheme;
    protected $_name = [
        'generationSource' => 'generationSource',
        'industry'         => 'industry',
        'pageNumber'       => 'pageNumber',
        'pageSize'         => 'pageSize',
        'publishStatus'    => 'publishStatus',
        'textStyleType'    => 'textStyleType',
        'textTheme'        => 'textTheme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generationSource) {
            $res['generationSource'] = $this->generationSource;
        }
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
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

    /**
     * @param array $map
     *
     * @return ListTextsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generationSource'])) {
            $model->generationSource = $map['generationSource'];
        }
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
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
