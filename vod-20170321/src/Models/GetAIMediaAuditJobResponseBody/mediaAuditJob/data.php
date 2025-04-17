<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\audioResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\imageResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\textResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data\videoResult;

class data extends Model
{
    /**
     * @var string
     */
    public $abnormalModules;

    /**
     * @var audioResult[]
     */
    public $audioResult;

    /**
     * @var imageResult[]
     */
    public $imageResult;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var textResult[]
     */
    public $textResult;

    /**
     * @var videoResult
     */
    public $videoResult;
    protected $_name = [
        'abnormalModules' => 'AbnormalModules',
        'audioResult' => 'AudioResult',
        'imageResult' => 'ImageResult',
        'label' => 'Label',
        'suggestion' => 'Suggestion',
        'textResult' => 'TextResult',
        'videoResult' => 'VideoResult',
    ];

    public function validate()
    {
        if (\is_array($this->audioResult)) {
            Model::validateArray($this->audioResult);
        }
        if (\is_array($this->imageResult)) {
            Model::validateArray($this->imageResult);
        }
        if (\is_array($this->textResult)) {
            Model::validateArray($this->textResult);
        }
        if (null !== $this->videoResult) {
            $this->videoResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalModules) {
            $res['AbnormalModules'] = $this->abnormalModules;
        }

        if (null !== $this->audioResult) {
            if (\is_array($this->audioResult)) {
                $res['AudioResult'] = [];
                $n1 = 0;
                foreach ($this->audioResult as $item1) {
                    $res['AudioResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->imageResult) {
            if (\is_array($this->imageResult)) {
                $res['ImageResult'] = [];
                $n1 = 0;
                foreach ($this->imageResult as $item1) {
                    $res['ImageResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        if (null !== $this->textResult) {
            if (\is_array($this->textResult)) {
                $res['TextResult'] = [];
                $n1 = 0;
                foreach ($this->textResult as $item1) {
                    $res['TextResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->videoResult) {
            $res['VideoResult'] = null !== $this->videoResult ? $this->videoResult->toArray($noStream) : $this->videoResult;
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
        if (isset($map['AbnormalModules'])) {
            $model->abnormalModules = $map['AbnormalModules'];
        }

        if (isset($map['AudioResult'])) {
            if (!empty($map['AudioResult'])) {
                $model->audioResult = [];
                $n1 = 0;
                foreach ($map['AudioResult'] as $item1) {
                    $model->audioResult[$n1++] = audioResult::fromMap($item1);
                }
            }
        }

        if (isset($map['ImageResult'])) {
            if (!empty($map['ImageResult'])) {
                $model->imageResult = [];
                $n1 = 0;
                foreach ($map['ImageResult'] as $item1) {
                    $model->imageResult[$n1++] = imageResult::fromMap($item1);
                }
            }
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        if (isset($map['TextResult'])) {
            if (!empty($map['TextResult'])) {
                $model->textResult = [];
                $n1 = 0;
                foreach ($map['TextResult'] as $item1) {
                    $model->textResult[$n1++] = textResult::fromMap($item1);
                }
            }
        }

        if (isset($map['VideoResult'])) {
            $model->videoResult = videoResult::fromMap($map['VideoResult']);
        }

        return $model;
    }
}
