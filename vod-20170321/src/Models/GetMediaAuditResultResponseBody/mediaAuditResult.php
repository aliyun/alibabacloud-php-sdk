<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\audioResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\imageResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\textResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponseBody\mediaAuditResult\videoResult;
use AlibabaCloud\Tea\Model;

class mediaAuditResult extends Model
{
    /**
     * @description The ID of the video or image.
     *
     * @example video
     *
     * @var string
     */
    public $abnormalModules;

    /**
     * @description The category of the review result. Valid values:
     *
     * - **porn**
     * - **sexy**
     * - **normal**
     * @var audioResult[]
     */
    public $audioResult;

    /**
     * @description The average score of the review results.
     *
     * @var imageResult[]
     */
    public $imageResult;

    /**
     * @description The number of frames.
     *
     * @example porn
     *
     * @var string
     */
    public $label;

    /**
     * @description The URL of the image.
     *
     * @example pass
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The information about the image with the highest score of the category that is indicated by Label.
     *
     * @var textResult[]
     */
    public $textResult;

    /**
     * @description The recommendation for review results. Valid values:
     *
     * - **block**
     * - **review**
     * - **pass**
     * @var videoResult
     */
    public $videoResult;
    protected $_name = [
        'abnormalModules' => 'AbnormalModules',
        'audioResult'     => 'AudioResult',
        'imageResult'     => 'ImageResult',
        'label'           => 'Label',
        'suggestion'      => 'Suggestion',
        'textResult'      => 'TextResult',
        'videoResult'     => 'VideoResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalModules) {
            $res['AbnormalModules'] = $this->abnormalModules;
        }
        if (null !== $this->audioResult) {
            $res['AudioResult'] = [];
            if (null !== $this->audioResult && \is_array($this->audioResult)) {
                $n = 0;
                foreach ($this->audioResult as $item) {
                    $res['AudioResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageResult) {
            $res['ImageResult'] = [];
            if (null !== $this->imageResult && \is_array($this->imageResult)) {
                $n = 0;
                foreach ($this->imageResult as $item) {
                    $res['ImageResult'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['TextResult'] = [];
            if (null !== $this->textResult && \is_array($this->textResult)) {
                $n = 0;
                foreach ($this->textResult as $item) {
                    $res['TextResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoResult) {
            $res['VideoResult'] = null !== $this->videoResult ? $this->videoResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaAuditResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalModules'])) {
            $model->abnormalModules = $map['AbnormalModules'];
        }
        if (isset($map['AudioResult'])) {
            if (!empty($map['AudioResult'])) {
                $model->audioResult = [];
                $n                  = 0;
                foreach ($map['AudioResult'] as $item) {
                    $model->audioResult[$n++] = null !== $item ? audioResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageResult'])) {
            if (!empty($map['ImageResult'])) {
                $model->imageResult = [];
                $n                  = 0;
                foreach ($map['ImageResult'] as $item) {
                    $model->imageResult[$n++] = null !== $item ? imageResult::fromMap($item) : $item;
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
                $n                 = 0;
                foreach ($map['TextResult'] as $item) {
                    $model->textResult[$n++] = null !== $item ? textResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoResult'])) {
            $model->videoResult = videoResult::fromMap($map['VideoResult']);
        }

        return $model;
    }
}
