<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models\DescribeUserBizTypesResponseBody;

use AlibabaCloud\Tea\Model;

class bizTypeListImport extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var bool
     */
    public $citeTemplate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $gray;

    /**
     * @var string
     */
    public $industryInfo;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceBizType;
    protected $_name = [
        'bizType'       => 'BizType',
        'citeTemplate'  => 'CiteTemplate',
        'description'   => 'Description',
        'gray'          => 'Gray',
        'industryInfo'  => 'IndustryInfo',
        'source'        => 'Source',
        'sourceBizType' => 'SourceBizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->citeTemplate) {
            $res['CiteTemplate'] = $this->citeTemplate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gray) {
            $res['Gray'] = $this->gray;
        }
        if (null !== $this->industryInfo) {
            $res['IndustryInfo'] = $this->industryInfo;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceBizType) {
            $res['SourceBizType'] = $this->sourceBizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bizTypeListImport
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CiteTemplate'])) {
            $model->citeTemplate = $map['CiteTemplate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Gray'])) {
            $model->gray = $map['Gray'];
        }
        if (isset($map['IndustryInfo'])) {
            $model->industryInfo = $map['IndustryInfo'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceBizType'])) {
            $model->sourceBizType = $map['SourceBizType'];
        }

        return $model;
    }
}
