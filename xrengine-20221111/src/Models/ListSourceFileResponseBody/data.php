<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\ListSourceFileResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListSourceFileResponseBody\data\picList;
use AlibabaCloud\SDK\XrEngine\V20221111\Models\ListSourceFileResponseBody\data\videoList;

class data extends Model
{
    /**
     * @var picList[]
     */
    public $picList;

    /**
     * @var videoList[]
     */
    public $videoList;
    protected $_name = [
        'picList' => 'PicList',
        'videoList' => 'VideoList',
    ];

    public function validate()
    {
        if (\is_array($this->picList)) {
            Model::validateArray($this->picList);
        }
        if (\is_array($this->videoList)) {
            Model::validateArray($this->videoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->picList) {
            if (\is_array($this->picList)) {
                $res['PicList'] = [];
                $n1 = 0;
                foreach ($this->picList as $item1) {
                    $res['PicList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->videoList) {
            if (\is_array($this->videoList)) {
                $res['VideoList'] = [];
                $n1 = 0;
                foreach ($this->videoList as $item1) {
                    $res['VideoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PicList'])) {
            if (!empty($map['PicList'])) {
                $model->picList = [];
                $n1 = 0;
                foreach ($map['PicList'] as $item1) {
                    $model->picList[$n1] = picList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VideoList'])) {
            if (!empty($map['VideoList'])) {
                $model->videoList = [];
                $n1 = 0;
                foreach ($map['VideoList'] as $item1) {
                    $model->videoList[$n1] = videoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
