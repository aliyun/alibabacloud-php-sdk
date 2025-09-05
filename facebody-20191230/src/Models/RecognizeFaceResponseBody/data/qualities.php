<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeFaceResponseBody\data;

use AlibabaCloud\Dara\Model;

class qualities extends Model
{
    /**
     * @var float[]
     */
    public $blurList;

    /**
     * @var float[]
     */
    public $fnfList;

    /**
     * @var float[]
     */
    public $glassList;

    /**
     * @var float[]
     */
    public $illuList;

    /**
     * @var float[]
     */
    public $maskList;

    /**
     * @var float[]
     */
    public $noiseList;

    /**
     * @var float[]
     */
    public $poseList;

    /**
     * @var float[]
     */
    public $scoreList;
    protected $_name = [
        'blurList' => 'BlurList',
        'fnfList' => 'FnfList',
        'glassList' => 'GlassList',
        'illuList' => 'IlluList',
        'maskList' => 'MaskList',
        'noiseList' => 'NoiseList',
        'poseList' => 'PoseList',
        'scoreList' => 'ScoreList',
    ];

    public function validate()
    {
        if (\is_array($this->blurList)) {
            Model::validateArray($this->blurList);
        }
        if (\is_array($this->fnfList)) {
            Model::validateArray($this->fnfList);
        }
        if (\is_array($this->glassList)) {
            Model::validateArray($this->glassList);
        }
        if (\is_array($this->illuList)) {
            Model::validateArray($this->illuList);
        }
        if (\is_array($this->maskList)) {
            Model::validateArray($this->maskList);
        }
        if (\is_array($this->noiseList)) {
            Model::validateArray($this->noiseList);
        }
        if (\is_array($this->poseList)) {
            Model::validateArray($this->poseList);
        }
        if (\is_array($this->scoreList)) {
            Model::validateArray($this->scoreList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blurList) {
            if (\is_array($this->blurList)) {
                $res['BlurList'] = [];
                $n1 = 0;
                foreach ($this->blurList as $item1) {
                    $res['BlurList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fnfList) {
            if (\is_array($this->fnfList)) {
                $res['FnfList'] = [];
                $n1 = 0;
                foreach ($this->fnfList as $item1) {
                    $res['FnfList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->glassList) {
            if (\is_array($this->glassList)) {
                $res['GlassList'] = [];
                $n1 = 0;
                foreach ($this->glassList as $item1) {
                    $res['GlassList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->illuList) {
            if (\is_array($this->illuList)) {
                $res['IlluList'] = [];
                $n1 = 0;
                foreach ($this->illuList as $item1) {
                    $res['IlluList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maskList) {
            if (\is_array($this->maskList)) {
                $res['MaskList'] = [];
                $n1 = 0;
                foreach ($this->maskList as $item1) {
                    $res['MaskList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noiseList) {
            if (\is_array($this->noiseList)) {
                $res['NoiseList'] = [];
                $n1 = 0;
                foreach ($this->noiseList as $item1) {
                    $res['NoiseList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->poseList) {
            if (\is_array($this->poseList)) {
                $res['PoseList'] = [];
                $n1 = 0;
                foreach ($this->poseList as $item1) {
                    $res['PoseList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scoreList) {
            if (\is_array($this->scoreList)) {
                $res['ScoreList'] = [];
                $n1 = 0;
                foreach ($this->scoreList as $item1) {
                    $res['ScoreList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['BlurList'])) {
            if (!empty($map['BlurList'])) {
                $model->blurList = [];
                $n1 = 0;
                foreach ($map['BlurList'] as $item1) {
                    $model->blurList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FnfList'])) {
            if (!empty($map['FnfList'])) {
                $model->fnfList = [];
                $n1 = 0;
                foreach ($map['FnfList'] as $item1) {
                    $model->fnfList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GlassList'])) {
            if (!empty($map['GlassList'])) {
                $model->glassList = [];
                $n1 = 0;
                foreach ($map['GlassList'] as $item1) {
                    $model->glassList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IlluList'])) {
            if (!empty($map['IlluList'])) {
                $model->illuList = [];
                $n1 = 0;
                foreach ($map['IlluList'] as $item1) {
                    $model->illuList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaskList'])) {
            if (!empty($map['MaskList'])) {
                $model->maskList = [];
                $n1 = 0;
                foreach ($map['MaskList'] as $item1) {
                    $model->maskList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NoiseList'])) {
            if (!empty($map['NoiseList'])) {
                $model->noiseList = [];
                $n1 = 0;
                foreach ($map['NoiseList'] as $item1) {
                    $model->noiseList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PoseList'])) {
            if (!empty($map['PoseList'])) {
                $model->poseList = [];
                $n1 = 0;
                foreach ($map['PoseList'] as $item1) {
                    $model->poseList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScoreList'])) {
            if (!empty($map['ScoreList'])) {
                $model->scoreList = [];
                $n1 = 0;
                foreach ($map['ScoreList'] as $item1) {
                    $model->scoreList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
