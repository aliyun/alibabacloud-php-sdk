<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncCreateClipsTimeLineRequest;

use AlibabaCloud\Dara\Model;

class highLightConfig extends Model
{
    /**
     * @var bool
     */
    public $htAnalyzeRhythm;

    /**
     * @var string[]
     */
    public $htHighQualityLabel;

    /**
     * @var string[]
     */
    public $htLowQualityLabel;

    /**
     * @var int
     */
    public $htMaxTimeLength;

    /**
     * @var int
     */
    public $htMinTimeLength;

    /**
     * @var string
     */
    public $htPrompt;

    /**
     * @var int
     */
    public $htSingleShotLen;
    protected $_name = [
        'htAnalyzeRhythm' => 'HtAnalyzeRhythm',
        'htHighQualityLabel' => 'HtHighQualityLabel',
        'htLowQualityLabel' => 'HtLowQualityLabel',
        'htMaxTimeLength' => 'HtMaxTimeLength',
        'htMinTimeLength' => 'HtMinTimeLength',
        'htPrompt' => 'HtPrompt',
        'htSingleShotLen' => 'HtSingleShotLen',
    ];

    public function validate()
    {
        if (\is_array($this->htHighQualityLabel)) {
            Model::validateArray($this->htHighQualityLabel);
        }
        if (\is_array($this->htLowQualityLabel)) {
            Model::validateArray($this->htLowQualityLabel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->htAnalyzeRhythm) {
            $res['HtAnalyzeRhythm'] = $this->htAnalyzeRhythm;
        }

        if (null !== $this->htHighQualityLabel) {
            if (\is_array($this->htHighQualityLabel)) {
                $res['HtHighQualityLabel'] = [];
                $n1 = 0;
                foreach ($this->htHighQualityLabel as $item1) {
                    $res['HtHighQualityLabel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->htLowQualityLabel) {
            if (\is_array($this->htLowQualityLabel)) {
                $res['HtLowQualityLabel'] = [];
                $n1 = 0;
                foreach ($this->htLowQualityLabel as $item1) {
                    $res['HtLowQualityLabel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->htMaxTimeLength) {
            $res['HtMaxTimeLength'] = $this->htMaxTimeLength;
        }

        if (null !== $this->htMinTimeLength) {
            $res['HtMinTimeLength'] = $this->htMinTimeLength;
        }

        if (null !== $this->htPrompt) {
            $res['HtPrompt'] = $this->htPrompt;
        }

        if (null !== $this->htSingleShotLen) {
            $res['HtSingleShotLen'] = $this->htSingleShotLen;
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
        if (isset($map['HtAnalyzeRhythm'])) {
            $model->htAnalyzeRhythm = $map['HtAnalyzeRhythm'];
        }

        if (isset($map['HtHighQualityLabel'])) {
            if (!empty($map['HtHighQualityLabel'])) {
                $model->htHighQualityLabel = [];
                $n1 = 0;
                foreach ($map['HtHighQualityLabel'] as $item1) {
                    $model->htHighQualityLabel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HtLowQualityLabel'])) {
            if (!empty($map['HtLowQualityLabel'])) {
                $model->htLowQualityLabel = [];
                $n1 = 0;
                foreach ($map['HtLowQualityLabel'] as $item1) {
                    $model->htLowQualityLabel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HtMaxTimeLength'])) {
            $model->htMaxTimeLength = $map['HtMaxTimeLength'];
        }

        if (isset($map['HtMinTimeLength'])) {
            $model->htMinTimeLength = $map['HtMinTimeLength'];
        }

        if (isset($map['HtPrompt'])) {
            $model->htPrompt = $map['HtPrompt'];
        }

        if (isset($map['HtSingleShotLen'])) {
            $model->htSingleShotLen = $map['HtSingleShotLen'];
        }

        return $model;
    }
}
