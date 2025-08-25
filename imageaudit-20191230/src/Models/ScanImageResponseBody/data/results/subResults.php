<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\frames;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\hintWordsInfoList;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\logoDataList;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\programCodeDataList;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponseBody\data\results\subResults\sfaceDataList;

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
        'frames' => 'Frames',
        'hintWordsInfoList' => 'HintWordsInfoList',
        'label' => 'Label',
        'logoDataList' => 'LogoDataList',
        'OCRDataList' => 'OCRDataList',
        'programCodeDataList' => 'ProgramCodeDataList',
        'rate' => 'Rate',
        'scene' => 'Scene',
        'sfaceDataList' => 'SfaceDataList',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->frames)) {
            Model::validateArray($this->frames);
        }
        if (\is_array($this->hintWordsInfoList)) {
            Model::validateArray($this->hintWordsInfoList);
        }
        if (\is_array($this->logoDataList)) {
            Model::validateArray($this->logoDataList);
        }
        if (\is_array($this->OCRDataList)) {
            Model::validateArray($this->OCRDataList);
        }
        if (\is_array($this->programCodeDataList)) {
            Model::validateArray($this->programCodeDataList);
        }
        if (\is_array($this->sfaceDataList)) {
            Model::validateArray($this->sfaceDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frames) {
            if (\is_array($this->frames)) {
                $res['Frames'] = [];
                $n1 = 0;
                foreach ($this->frames as $item1) {
                    $res['Frames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hintWordsInfoList) {
            if (\is_array($this->hintWordsInfoList)) {
                $res['HintWordsInfoList'] = [];
                $n1 = 0;
                foreach ($this->hintWordsInfoList as $item1) {
                    $res['HintWordsInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->logoDataList) {
            if (\is_array($this->logoDataList)) {
                $res['LogoDataList'] = [];
                $n1 = 0;
                foreach ($this->logoDataList as $item1) {
                    $res['LogoDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->OCRDataList) {
            if (\is_array($this->OCRDataList)) {
                $res['OCRDataList'] = [];
                $n1 = 0;
                foreach ($this->OCRDataList as $item1) {
                    $res['OCRDataList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->programCodeDataList) {
            if (\is_array($this->programCodeDataList)) {
                $res['ProgramCodeDataList'] = [];
                $n1 = 0;
                foreach ($this->programCodeDataList as $item1) {
                    $res['ProgramCodeDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->sfaceDataList)) {
                $res['SfaceDataList'] = [];
                $n1 = 0;
                foreach ($this->sfaceDataList as $item1) {
                    $res['SfaceDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n1 = 0;
                foreach ($map['Frames'] as $item1) {
                    $model->frames[$n1] = frames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HintWordsInfoList'])) {
            if (!empty($map['HintWordsInfoList'])) {
                $model->hintWordsInfoList = [];
                $n1 = 0;
                foreach ($map['HintWordsInfoList'] as $item1) {
                    $model->hintWordsInfoList[$n1] = hintWordsInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['LogoDataList'])) {
            if (!empty($map['LogoDataList'])) {
                $model->logoDataList = [];
                $n1 = 0;
                foreach ($map['LogoDataList'] as $item1) {
                    $model->logoDataList[$n1] = logoDataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OCRDataList'])) {
            if (!empty($map['OCRDataList'])) {
                $model->OCRDataList = [];
                $n1 = 0;
                foreach ($map['OCRDataList'] as $item1) {
                    $model->OCRDataList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProgramCodeDataList'])) {
            if (!empty($map['ProgramCodeDataList'])) {
                $model->programCodeDataList = [];
                $n1 = 0;
                foreach ($map['ProgramCodeDataList'] as $item1) {
                    $model->programCodeDataList[$n1] = programCodeDataList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SfaceDataList'] as $item1) {
                    $model->sfaceDataList[$n1] = sfaceDataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
