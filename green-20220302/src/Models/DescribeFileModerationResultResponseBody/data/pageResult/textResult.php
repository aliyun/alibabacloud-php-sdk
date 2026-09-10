<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeFileModerationResultResponseBody\data\pageResult\textResult\result;

class textResult extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptions;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskTips;

    /**
     * @var string
     */
    public $riskWords;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $textSegment;
    protected $_name = [
        'description' => 'Description',
        'descriptions' => 'Descriptions',
        'labels' => 'Labels',
        'result' => 'Result',
        'riskLevel' => 'RiskLevel',
        'riskTips' => 'RiskTips',
        'riskWords' => 'RiskWords',
        'service' => 'Service',
        'text' => 'Text',
        'textSegment' => 'TextSegment',
    ];

    public function validate()
    {
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1 = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1] = result::fromMap($item1);
                    ++$n1;
                }
            }
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
