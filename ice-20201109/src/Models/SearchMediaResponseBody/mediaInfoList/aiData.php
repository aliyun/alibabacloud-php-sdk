<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData\aiLabelInfo;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData\asrInfo;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData\ocrInfo;

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
        if (\is_array($this->aiLabelInfo)) {
            Model::validateArray($this->aiLabelInfo);
        }
        if (\is_array($this->asrInfo)) {
            Model::validateArray($this->asrInfo);
        }
        if (\is_array($this->ocrInfo)) {
            Model::validateArray($this->ocrInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiLabelInfo) {
            if (\is_array($this->aiLabelInfo)) {
                $res['AiLabelInfo'] = [];
                $n1                 = 0;
                foreach ($this->aiLabelInfo as $item1) {
                    $res['AiLabelInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->asrInfo) {
            if (\is_array($this->asrInfo)) {
                $res['AsrInfo'] = [];
                $n1             = 0;
                foreach ($this->asrInfo as $item1) {
                    $res['AsrInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ocrInfo) {
            if (\is_array($this->ocrInfo)) {
                $res['OcrInfo'] = [];
                $n1             = 0;
                foreach ($this->ocrInfo as $item1) {
                    $res['OcrInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AiLabelInfo'])) {
            if (!empty($map['AiLabelInfo'])) {
                $model->aiLabelInfo = [];
                $n1                 = 0;
                foreach ($map['AiLabelInfo'] as $item1) {
                    $model->aiLabelInfo[$n1++] = aiLabelInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['AsrInfo'])) {
            if (!empty($map['AsrInfo'])) {
                $model->asrInfo = [];
                $n1             = 0;
                foreach ($map['AsrInfo'] as $item1) {
                    $model->asrInfo[$n1++] = asrInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['OcrInfo'])) {
            if (!empty($map['OcrInfo'])) {
                $model->ocrInfo = [];
                $n1             = 0;
                foreach ($map['OcrInfo'] as $item1) {
                    $model->ocrInfo[$n1++] = ocrInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
