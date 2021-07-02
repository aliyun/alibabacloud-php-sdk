<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponseBody;

use AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizePdfResponseBody\data\wordsInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $width;

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
    public $angle;

    /**
     * @var wordsInfo[]
     */
    public $wordsInfo;
    protected $_name = [
        'height'    => 'Height',
        'width'     => 'Width',
        'orgHeight' => 'OrgHeight',
        'orgWidth'  => 'OrgWidth',
        'pageIndex' => 'PageIndex',
        'angle'     => 'Angle',
        'wordsInfo' => 'WordsInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (null !== $this->angle) {
            $res['Angle'] = $this->angle;
        }
        if (null !== $this->wordsInfo) {
            $res['WordsInfo'] = [];
            if (null !== $this->wordsInfo && \is_array($this->wordsInfo)) {
                $n = 0;
                foreach ($this->wordsInfo as $item) {
                    $res['WordsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
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
        if (isset($map['Angle'])) {
            $model->angle = $map['Angle'];
        }
        if (isset($map['WordsInfo'])) {
            if (!empty($map['WordsInfo'])) {
                $model->wordsInfo = [];
                $n                = 0;
                foreach ($map['WordsInfo'] as $item) {
                    $model->wordsInfo[$n++] = null !== $item ? wordsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
