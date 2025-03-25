<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenBC;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenBC\lesion\left;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenBC\lesion\lesionList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenBC\lesion\organList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\screenBC\lesion\right;

class lesion extends Model
{
    /**
     * @var left
     */
    public $left;

    /**
     * @var lesionList[]
     */
    public $lesionList;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var organList[]
     */
    public $organList;

    /**
     * @var right
     */
    public $right;
    protected $_name = [
        'left' => 'Left',
        'lesionList' => 'LesionList',
        'mask' => 'Mask',
        'organList' => 'OrganList',
        'right' => 'Right',
    ];

    public function validate()
    {
        if (null !== $this->left) {
            $this->left->validate();
        }
        if (\is_array($this->lesionList)) {
            Model::validateArray($this->lesionList);
        }
        if (\is_array($this->organList)) {
            Model::validateArray($this->organList);
        }
        if (null !== $this->right) {
            $this->right->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->left) {
            $res['Left'] = null !== $this->left ? $this->left->toArray($noStream) : $this->left;
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

        if (null !== $this->organList) {
            if (\is_array($this->organList)) {
                $res['OrganList'] = [];
                $n1 = 0;
                foreach ($this->organList as $item1) {
                    $res['OrganList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->right) {
            $res['Right'] = null !== $this->right ? $this->right->toArray($noStream) : $this->right;
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
        if (isset($map['Left'])) {
            $model->left = left::fromMap($map['Left']);
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

        if (isset($map['OrganList'])) {
            if (!empty($map['OrganList'])) {
                $model->organList = [];
                $n1 = 0;
                foreach ($map['OrganList'] as $item1) {
                    $model->organList[$n1++] = organList::fromMap($item1);
                }
            }
        }

        if (isset($map['Right'])) {
            $model->right = right::fromMap($map['Right']);
        }

        return $model;
    }
}
