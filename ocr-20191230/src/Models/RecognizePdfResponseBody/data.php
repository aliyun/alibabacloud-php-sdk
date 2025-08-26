<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponseBody\data\wordsInfo;

class data extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $orgHeight;

    /**
     * @var int
     */
    public $orgWidth;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $width;

    /**
     * @var wordsInfo[]
     */
    public $wordsInfo;
    protected $_name = [
        'angle' => 'Angle',
        'height' => 'Height',
        'orgHeight' => 'OrgHeight',
        'orgWidth' => 'OrgWidth',
        'pageIndex' => 'PageIndex',
        'width' => 'Width',
        'wordsInfo' => 'WordsInfo',
    ];

    public function validate()
    {
        if (\is_array($this->wordsInfo)) {
            Model::validateArray($this->wordsInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->orgHeight) {
            $res['OrgHeight'] = $this->orgHeight;
        }

        if (null !== $this->orgWidth) {
            $res['OrgWidth'] = $this->orgWidth;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        if (null !== $this->wordsInfo) {
            if (\is_array($this->wordsInfo)) {
                $res['WordsInfo'] = [];
                $n1 = 0;
                foreach ($this->wordsInfo as $item1) {
                    $res['WordsInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['OrgHeight'])) {
            $model->orgHeight = $map['OrgHeight'];
        }

        if (isset($map['OrgWidth'])) {
            $model->orgWidth = $map['OrgWidth'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        if (isset($map['WordsInfo'])) {
            if (!empty($map['WordsInfo'])) {
                $model->wordsInfo = [];
                $n1 = 0;
                foreach ($map['WordsInfo'] as $item1) {
                    $model->wordsInfo[$n1] = wordsInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
