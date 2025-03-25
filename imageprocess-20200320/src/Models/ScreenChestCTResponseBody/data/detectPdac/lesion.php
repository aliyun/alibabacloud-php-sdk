<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectPdac;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectPdac\lesion\lesionList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectPdac\lesion\organList;

class lesion extends Model
{
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
    public $nonPdacVol;

    /**
     * @var organList[]
     */
    public $organList;

    /**
     * @var string
     */
    public $pancVol;

    /**
     * @var string
     */
    public $pdacVol;

    /**
     * @var string[]
     */
    public $possibilities;
    protected $_name = [
        'lesionList' => 'LesionList',
        'mask' => 'Mask',
        'nonPdacVol' => 'NonPdacVol',
        'organList' => 'OrganList',
        'pancVol' => 'PancVol',
        'pdacVol' => 'PdacVol',
        'possibilities' => 'Possibilities',
    ];

    public function validate()
    {
        if (\is_array($this->lesionList)) {
            Model::validateArray($this->lesionList);
        }
        if (\is_array($this->organList)) {
            Model::validateArray($this->organList);
        }
        if (\is_array($this->possibilities)) {
            Model::validateArray($this->possibilities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->nonPdacVol) {
            $res['NonPdacVol'] = $this->nonPdacVol;
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

        if (null !== $this->pancVol) {
            $res['PancVol'] = $this->pancVol;
        }

        if (null !== $this->pdacVol) {
            $res['PdacVol'] = $this->pdacVol;
        }

        if (null !== $this->possibilities) {
            if (\is_array($this->possibilities)) {
                $res['Possibilities'] = [];
                $n1 = 0;
                foreach ($this->possibilities as $item1) {
                    $res['Possibilities'][$n1++] = $item1;
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

        if (isset($map['NonPdacVol'])) {
            $model->nonPdacVol = $map['NonPdacVol'];
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

        if (isset($map['PancVol'])) {
            $model->pancVol = $map['PancVol'];
        }

        if (isset($map['PdacVol'])) {
            $model->pdacVol = $map['PdacVol'];
        }

        if (isset($map['Possibilities'])) {
            if (!empty($map['Possibilities'])) {
                $model->possibilities = [];
                $n1 = 0;
                foreach ($map['Possibilities'] as $item1) {
                    $model->possibilities[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
