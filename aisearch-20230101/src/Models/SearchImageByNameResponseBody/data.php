<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByNameResponseBody;

use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByNameResponseBody\data\picInfos;
use AlibabaCloud\SDK\Aisearch\V20230101\Models\SearchImageByNameResponseBody\data\picList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var picInfos[]
     */
    public $picInfos;

    /**
     * @var picList[]
     */
    public $picList;
    protected $_name = [
        'picInfos' => 'PicInfos',
        'picList'  => 'PicList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picInfos) {
            $res['PicInfos'] = [];
            if (null !== $this->picInfos && \is_array($this->picInfos)) {
                $n = 0;
                foreach ($this->picInfos as $item) {
                    $res['PicInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->picList) {
            $res['PicList'] = [];
            if (null !== $this->picList && \is_array($this->picList)) {
                $n = 0;
                foreach ($this->picList as $item) {
                    $res['PicList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PicInfos'])) {
            if (!empty($map['PicInfos'])) {
                $model->picInfos = [];
                $n               = 0;
                foreach ($map['PicInfos'] as $item) {
                    $model->picInfos[$n++] = null !== $item ? picInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PicList'])) {
            if (!empty($map['PicList'])) {
                $model->picList = [];
                $n              = 0;
                foreach ($map['PicList'] as $item) {
                    $model->picList[$n++] = null !== $item ? picList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
