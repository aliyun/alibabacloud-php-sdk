<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\RecolorImageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $imageList;
    protected $_name = [
        'imageList' => 'ImageList',
    ];

    public function validate()
    {
        if (\is_array($this->imageList)) {
            Model::validateArray($this->imageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageList) {
            if (\is_array($this->imageList)) {
                $res['ImageList'] = [];
                $n1 = 0;
                foreach ($this->imageList as $item1) {
                    $res['ImageList'][$n1] = $item1;
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
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = [];
                $n1 = 0;
                foreach ($map['ImageList'] as $item1) {
                    $model->imageList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
