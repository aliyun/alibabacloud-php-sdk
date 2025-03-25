<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenGC;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenGC\lesion\lesionList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenGC\lesion\organList;

class lesion extends Model
{
    /**
     * @var string
     */
    public $GCVolume;

    /**
     * @var lesionList[]
     */
    public $lesionList;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $nonGCVolume;

    /**
     * @var organList[]
     */
    public $organList;

    /**
     * @var string[]
     */
    public $probabilities;

    /**
     * @var string
     */
    public $stomachVolume;
    protected $_name = [
        'GCVolume' => 'GCVolume',
        'lesionList' => 'LesionList',
        'mask' => 'Mask',
        'nonGCVolume' => 'NonGCVolume',
        'organList' => 'OrganList',
        'probabilities' => 'Probabilities',
        'stomachVolume' => 'StomachVolume',
    ];

    public function validate()
    {
        if (\is_array($this->lesionList)) {
            Model::validateArray($this->lesionList);
        }
        if (\is_array($this->organList)) {
            Model::validateArray($this->organList);
        }
        if (\is_array($this->probabilities)) {
            Model::validateArray($this->probabilities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->GCVolume) {
            $res['GCVolume'] = $this->GCVolume;
        }

        if (null !== $this->lesionList) {
            if (\is_array($this->lesionList)) {
                $res['LesionList'] = [];
                $n1 = 0;
                foreach ($this->lesionList as $item1) {
                    $res['LesionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->nonGCVolume) {
            $res['NonGCVolume'] = $this->nonGCVolume;
        }

        if (null !== $this->organList) {
            if (\is_array($this->organList)) {
                $res['OrganList'] = [];
                $n1 = 0;
                foreach ($this->organList as $item1) {
                    $res['OrganList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->probabilities) {
            if (\is_array($this->probabilities)) {
                $res['Probabilities'] = [];
                $n1 = 0;
                foreach ($this->probabilities as $item1) {
                    $res['Probabilities'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stomachVolume) {
            $res['StomachVolume'] = $this->stomachVolume;
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
        if (isset($map['GCVolume'])) {
            $model->GCVolume = $map['GCVolume'];
        }

        if (isset($map['LesionList'])) {
            if (!empty($map['LesionList'])) {
                $model->lesionList = [];
                $n1 = 0;
                foreach ($map['LesionList'] as $item1) {
                    $model->lesionList[$n1++] = lesionList::fromMap($item1);
                }
            }
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['NonGCVolume'])) {
            $model->nonGCVolume = $map['NonGCVolume'];
        }

        if (isset($map['OrganList'])) {
            if (!empty($map['OrganList'])) {
                $model->organList = [];
                $n1 = 0;
                foreach ($map['OrganList'] as $item1) {
                    $model->organList[$n1++] = organList::fromMap($item1);
                }
            }
        }

        if (isset($map['Probabilities'])) {
            if (!empty($map['Probabilities'])) {
                $model->probabilities = [];
                $n1 = 0;
                foreach ($map['Probabilities'] as $item1) {
                    $model->probabilities[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StomachVolume'])) {
            $model->stomachVolume = $map['StomachVolume'];
        }

        return $model;
    }
}
