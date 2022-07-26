<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results;

use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\frames;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\hintWordsInfoList;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\logoDataList;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\programCodeDataList;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\sfaceDataList;
use AlibabaCloud\Tea\Model;

class subResults extends Model
{
    /**
     * @var frames[]
     */
    public $frames;

    /**
     * @var hintWordsInfoList[]
     */
    public $hintWordsInfoList;

    /**
     * @var string
     */
    public $label;

    /**
     * @var logoDataList[]
     */
    public $logoDataList;

    /**
     * @var string[]
     */
    public $OCRDataList;

    /**
     * @var programCodeDataList[]
     */
    public $programCodeDataList;

    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var sfaceDataList[]
     */
    public $sfaceDataList;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'frames'              => 'Frames',
        'hintWordsInfoList'   => 'HintWordsInfoList',
        'label'               => 'Label',
        'logoDataList'        => 'LogoDataList',
        'OCRDataList'         => 'OCRDataList',
        'programCodeDataList' => 'ProgramCodeDataList',
        'rate'                => 'Rate',
        'scene'               => 'Scene',
        'sfaceDataList'       => 'SfaceDataList',
        'suggestion'          => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frames) {
            $res['Frames'] = [];
            if (null !== $this->frames && \is_array($this->frames)) {
                $n = 0;
                foreach ($this->frames as $item) {
                    $res['Frames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hintWordsInfoList) {
            $res['HintWordsInfoList'] = [];
            if (null !== $this->hintWordsInfoList && \is_array($this->hintWordsInfoList)) {
                $n = 0;
                foreach ($this->hintWordsInfoList as $item) {
                    $res['HintWordsInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->logoDataList) {
            $res['LogoDataList'] = [];
            if (null !== $this->logoDataList && \is_array($this->logoDataList)) {
                $n = 0;
                foreach ($this->logoDataList as $item) {
                    $res['LogoDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->OCRDataList) {
            $res['OCRDataList'] = $this->OCRDataList;
        }
        if (null !== $this->programCodeDataList) {
            $res['ProgramCodeDataList'] = [];
            if (null !== $this->programCodeDataList && \is_array($this->programCodeDataList)) {
                $n = 0;
                foreach ($this->programCodeDataList as $item) {
                    $res['ProgramCodeDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->sfaceDataList) {
            $res['SfaceDataList'] = [];
            if (null !== $this->sfaceDataList && \is_array($this->sfaceDataList)) {
                $n = 0;
                foreach ($this->sfaceDataList as $item) {
                    $res['SfaceDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n             = 0;
                foreach ($map['Frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? frames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HintWordsInfoList'])) {
            if (!empty($map['HintWordsInfoList'])) {
                $model->hintWordsInfoList = [];
                $n                        = 0;
                foreach ($map['HintWordsInfoList'] as $item) {
                    $model->hintWordsInfoList[$n++] = null !== $item ? hintWordsInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['LogoDataList'])) {
            if (!empty($map['LogoDataList'])) {
                $model->logoDataList = [];
                $n                   = 0;
                foreach ($map['LogoDataList'] as $item) {
                    $model->logoDataList[$n++] = null !== $item ? logoDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OCRDataList'])) {
            if (!empty($map['OCRDataList'])) {
                $model->OCRDataList = $map['OCRDataList'];
            }
        }
        if (isset($map['ProgramCodeDataList'])) {
            if (!empty($map['ProgramCodeDataList'])) {
                $model->programCodeDataList = [];
                $n                          = 0;
                foreach ($map['ProgramCodeDataList'] as $item) {
                    $model->programCodeDataList[$n++] = null !== $item ? programCodeDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SfaceDataList'])) {
            if (!empty($map['SfaceDataList'])) {
                $model->sfaceDataList = [];
                $n                    = 0;
                foreach ($map['SfaceDataList'] as $item) {
                    $model->sfaceDataList[$n++] = null !== $item ? sfaceDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
