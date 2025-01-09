<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult;

use AlibabaCloud\Tea\Model;

class textResult extends Model
{
    /**
     * @description The description.
     *
     * @example This is a title.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptions;

    /**
     * @description The details of the labels.
     *
     * @example porn
     *
     * @var string
     */
    public $labels;

    /**
     * @description Risk Level
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The risk details that are hit.
     *
     * @example xxx
     *
     * @var string
     */
    public $riskTips;

    /**
     * @description The risk words that are hit.
     *
     * @example xxx
     *
     * @var string
     */
    public $riskWords;

    /**
     * @description The moderation service.
     *
     * @example chat_detection
     *
     * @var string
     */
    public $service;

    /**
     * @description The text content.
     *
     * @example This is a text.
     *
     * @var string
     */
    public $text;

    /**
     * @description The text segmentation information.
     *
     * @example [0,999]
     *
     * @var string
     */
    public $textSegment;
    protected $_name = [
        'description'  => 'Description',
        'descriptions' => 'Descriptions',
        'labels'       => 'Labels',
        'riskLevel'    => 'RiskLevel',
        'riskTips'     => 'RiskTips',
        'riskWords'    => 'RiskWords',
        'service'      => 'Service',
        'text'         => 'Text',
        'textSegment'  => 'TextSegment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->descriptions) {
            $res['Descriptions'] = $this->descriptions;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskTips) {
            $res['RiskTips'] = $this->riskTips;
        }
        if (null !== $this->riskWords) {
            $res['RiskWords'] = $this->riskWords;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->textSegment) {
            $res['TextSegment'] = $this->textSegment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Descriptions'])) {
            $model->descriptions = $map['Descriptions'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RiskTips'])) {
            $model->riskTips = $map['RiskTips'];
        }
        if (isset($map['RiskWords'])) {
            $model->riskWords = $map['RiskWords'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['TextSegment'])) {
            $model->textSegment = $map['TextSegment'];
        }

        return $model;
    }
}
