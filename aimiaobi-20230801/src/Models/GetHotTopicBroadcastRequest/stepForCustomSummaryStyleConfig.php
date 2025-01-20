<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest;

use AlibabaCloud\Dara\Model;

class stepForCustomSummaryStyleConfig extends Model
{
    /**
     * @var int
     */
    public $summaryImageCount;
    /**
     * @var string
     */
    public $summaryModel;
    /**
     * @var string
     */
    public $summaryPrompt;
    protected $_name = [
        'summaryImageCount' => 'SummaryImageCount',
        'summaryModel'      => 'SummaryModel',
        'summaryPrompt'     => 'SummaryPrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
