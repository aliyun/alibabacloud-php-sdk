<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageBaselineDetailResponseBody;

use AlibabaCloud\Tea\Model;

class baselineDetail extends Model
{
    /**
     * @description The suggestion for the management of the risk item.
     *
     * @example Delete the leaked AccessKey pairs.
     *
     * @var string
     */
    public $advice;

    /**
     * @description The alias of the baseline type.
     *
     * @example ak_leak
     *
     * @var string
     */
    public $baselineClassAlias;

    /**
     * @description The alias of the baseline check item.
     *
     * @example AccessKey pair leak
     *
     * @var string
     */
    public $baselineItemAlias;

    /**
     * @description The key of the baseline check item.
     *
     * @example ak_leak
     *
     * @var string
     */
    public $baselineItemKey;

    /**
     * @description The alias of the baseline.
     *
     * @example AccessKey pair leak
     *
     * @var string
     */
    public $baselineNameAlias;

    /**
     * @description The description of the risk item.
     *
     * @example If an AccessKey pair is leaked, the AccessKey pair may be fraudulently used.
     *
     * @var string
     */
    public $description;

    /**
     * @description The risk level of the baseline check item. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $level;

    /**
     * @description The issue that is detected by using the baseline.
     *
     * @example /usr/aksk.txt:LTAI4GBEG5zaqX**********
     *
     * @var string
     */
    public $prompt;

    /**
     * @description The ID of the asynchronous request.
     *
     * @example async__c6f3b0b54613383b40bdce593ffe****
     *
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
