<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest;

use AlibabaCloud\Tea\Model;

class stepForCustomSummaryStyleConfig extends Model
{
    /**
     * @example 90
     *
     * @var int
     */
    public $summaryImageCount;

    /**
     * @example 摘要模型
     *
     * @var string
     */
    public $summaryModel;

    /**
     * @example 摘要-自定义Prompt
     *
     * @var string
     */
    public $summaryPrompt;
    protected $_name = [
        'summaryImageCount' => 'SummaryImageCount',
        'summaryModel' => 'SummaryModel',
        'summaryPrompt' => 'SummaryPrompt',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaryImageCount) {
            $res['SummaryImageCount'] = $this->summaryImageCount;
        }
        if (null !== $this->summaryModel) {
            $res['SummaryModel'] = $this->summaryModel;
        }
        if (null !== $this->summaryPrompt) {
            $res['SummaryPrompt'] = $this->summaryPrompt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepForCustomSummaryStyleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SummaryImageCount'])) {
            $model->summaryImageCount = $map['SummaryImageCount'];
        }
        if (isset($map['SummaryModel'])) {
            $model->summaryModel = $map['SummaryModel'];
        }
        if (isset($map['SummaryPrompt'])) {
            $model->summaryPrompt = $map['SummaryPrompt'];
        }

        return $model;
    }
}
