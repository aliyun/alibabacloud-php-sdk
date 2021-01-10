<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\celebrities;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\customs;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\frameTagInfos;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\frameTags;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\politicians;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaDetailJobListResponseBody\jobList\job\mediaDetailResult\mediaDetailRecgResults\mediaDetailRecgResult\sensitives;
use AlibabaCloud\Tea\Model;

class mediaDetailRecgResult extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var sensitives
     */
    public $sensitives;

    /**
     * @var politicians
     */
    public $politicians;

    /**
     * @var frameTags
     */
    public $frameTags;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var customs
     */
    public $customs;

    /**
     * @var frameTagInfos
     */
    public $frameTagInfos;

    /**
     * @var celebrities
     */
    public $celebrities;

    /**
     * @var string
     */
    public $ocrText;
    protected $_name = [
        'time'          => 'Time',
        'sensitives'    => 'Sensitives',
        'politicians'   => 'Politicians',
        'frameTags'     => 'FrameTags',
        'imageUrl'      => 'ImageUrl',
        'customs'       => 'Customs',
        'frameTagInfos' => 'FrameTagInfos',
        'celebrities'   => 'Celebrities',
        'ocrText'       => 'OcrText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->sensitives) {
            $res['Sensitives'] = null !== $this->sensitives ? $this->sensitives->toMap() : null;
        }
        if (null !== $this->politicians) {
            $res['Politicians'] = null !== $this->politicians ? $this->politicians->toMap() : null;
        }
        if (null !== $this->frameTags) {
            $res['FrameTags'] = null !== $this->frameTags ? $this->frameTags->toMap() : null;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->customs) {
            $res['Customs'] = null !== $this->customs ? $this->customs->toMap() : null;
        }
        if (null !== $this->frameTagInfos) {
            $res['FrameTagInfos'] = null !== $this->frameTagInfos ? $this->frameTagInfos->toMap() : null;
        }
        if (null !== $this->celebrities) {
            $res['Celebrities'] = null !== $this->celebrities ? $this->celebrities->toMap() : null;
        }
        if (null !== $this->ocrText) {
            $res['OcrText'] = $this->ocrText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaDetailRecgResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Sensitives'])) {
            $model->sensitives = sensitives::fromMap($map['Sensitives']);
        }
        if (isset($map['Politicians'])) {
            $model->politicians = politicians::fromMap($map['Politicians']);
        }
        if (isset($map['FrameTags'])) {
            $model->frameTags = frameTags::fromMap($map['FrameTags']);
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Customs'])) {
            $model->customs = customs::fromMap($map['Customs']);
        }
        if (isset($map['FrameTagInfos'])) {
            $model->frameTagInfos = frameTagInfos::fromMap($map['FrameTagInfos']);
        }
        if (isset($map['Celebrities'])) {
            $model->celebrities = celebrities::fromMap($map['Celebrities']);
        }
        if (isset($map['OcrText'])) {
            $model->ocrText = $map['OcrText'];
        }

        return $model;
    }
}
