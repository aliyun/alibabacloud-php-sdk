<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryRequest;

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
        'summaryImageCount' => 'summaryImageCount',
        'summaryModel'      => 'summaryModel',
        'summaryPrompt'     => 'summaryPrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->summaryImageCount) {
            $res['summaryImageCount'] = $this->summaryImageCount;
        }

        if (null !== $this->summaryModel) {
            $res['summaryModel'] = $this->summaryModel;
        }

        if (null !== $this->summaryPrompt) {
            $res['summaryPrompt'] = $this->summaryPrompt;
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
        if (isset($map['summaryImageCount'])) {
            $model->summaryImageCount = $map['summaryImageCount'];
        }

        if (isset($map['summaryModel'])) {
            $model->summaryModel = $map['summaryModel'];
        }

        if (isset($map['summaryPrompt'])) {
            $model->summaryPrompt = $map['summaryPrompt'];
        }

        return $model;
    }
}
