<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineDetailResponseBody;

use AlibabaCloud\Tea\Model;

class baselineDetail extends Model
{
    /**
     * @var string
     */
    public $advice;

    /**
     * @var string
     */
    public $baselineClassAlias;

    /**
     * @var string
     */
    public $baselineItemAlias;

    /**
     * @var string
     */
    public $baselineItemKey;

    /**
     * @var string
     */
    public $baselineNameAlias;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $resultId;
    protected $_name = [
        'advice'             => 'Advice',
        'baselineClassAlias' => 'BaselineClassAlias',
        'baselineItemAlias'  => 'BaselineItemAlias',
        'baselineItemKey'    => 'BaselineItemKey',
        'baselineNameAlias'  => 'BaselineNameAlias',
        'description'        => 'Description',
        'level'              => 'Level',
        'prompt'             => 'Prompt',
        'resultId'           => 'ResultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->baselineClassAlias) {
            $res['BaselineClassAlias'] = $this->baselineClassAlias;
        }
        if (null !== $this->baselineItemAlias) {
            $res['BaselineItemAlias'] = $this->baselineItemAlias;
        }
        if (null !== $this->baselineItemKey) {
            $res['BaselineItemKey'] = $this->baselineItemKey;
        }
        if (null !== $this->baselineNameAlias) {
            $res['BaselineNameAlias'] = $this->baselineNameAlias;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baselineDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['BaselineClassAlias'])) {
            $model->baselineClassAlias = $map['BaselineClassAlias'];
        }
        if (isset($map['BaselineItemAlias'])) {
            $model->baselineItemAlias = $map['BaselineItemAlias'];
        }
        if (isset($map['BaselineItemKey'])) {
            $model->baselineItemKey = $map['BaselineItemKey'];
        }
        if (isset($map['BaselineNameAlias'])) {
            $model->baselineNameAlias = $map['BaselineNameAlias'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }

        return $model;
    }
}
