<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData\aiLabelInfo;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData\asrInfo;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaByAILabelResponseBody\mediaList\aiData\ocrInfo;
use AlibabaCloud\Tea\Model;

class aiData extends Model
{
    /**
     * @var aiLabelInfo[]
     */
    public $aiLabelInfo;

    /**
     * @var asrInfo[]
     */
    public $asrInfo;

    /**
     * @var ocrInfo[]
     */
    public $ocrInfo;
    protected $_name = [
        'aiLabelInfo' => 'AiLabelInfo',
        'asrInfo'     => 'AsrInfo',
        'ocrInfo'     => 'OcrInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiLabelInfo) {
            $res['AiLabelInfo'] = [];
            if (null !== $this->aiLabelInfo && \is_array($this->aiLabelInfo)) {
                $n = 0;
                foreach ($this->aiLabelInfo as $item) {
                    $res['AiLabelInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->asrInfo) {
            $res['AsrInfo'] = [];
            if (null !== $this->asrInfo && \is_array($this->asrInfo)) {
                $n = 0;
                foreach ($this->asrInfo as $item) {
                    $res['AsrInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ocrInfo) {
            $res['OcrInfo'] = [];
            if (null !== $this->ocrInfo && \is_array($this->ocrInfo)) {
                $n = 0;
                foreach ($this->ocrInfo as $item) {
                    $res['OcrInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aiData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiLabelInfo'])) {
            if (!empty($map['AiLabelInfo'])) {
                $model->aiLabelInfo = [];
                $n                  = 0;
                foreach ($map['AiLabelInfo'] as $item) {
                    $model->aiLabelInfo[$n++] = null !== $item ? aiLabelInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AsrInfo'])) {
            if (!empty($map['AsrInfo'])) {
                $model->asrInfo = [];
                $n              = 0;
                foreach ($map['AsrInfo'] as $item) {
                    $model->asrInfo[$n++] = null !== $item ? asrInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OcrInfo'])) {
            if (!empty($map['OcrInfo'])) {
                $model->ocrInfo = [];
                $n              = 0;
                foreach ($map['OcrInfo'] as $item) {
                    $model->ocrInfo[$n++] = null !== $item ? ocrInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
