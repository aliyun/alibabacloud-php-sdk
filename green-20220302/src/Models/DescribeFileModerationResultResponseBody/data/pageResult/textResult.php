<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult;

use AlibabaCloud\Tea\Model;

class textResult extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example porn
     *
     * @var string
     */
    public $labels;

    /**
     * @example xxx
     *
     * @var string
     */
    public $riskTips;

    /**
     * @example xxx
     *
     * @var string
     */
    public $riskWords;

    /**
     * @example chat_detection
     *
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $text;

    /**
     * @example [0,999]
     *
     * @var string
     */
    public $textSegment;
    protected $_name = [
        'description' => 'Description',
        'labels'      => 'Labels',
        'riskTips'    => 'RiskTips',
        'riskWords'   => 'RiskWords',
        'service'     => 'Service',
        'text'        => 'Text',
        'textSegment' => 'TextSegment',
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
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
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
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
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
