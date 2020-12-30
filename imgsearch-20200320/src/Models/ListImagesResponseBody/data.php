<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models\ListImagesResponseBody;

use AlibabaCloud\SDK\Imgsearch\V20200320\Models\ListImagesResponseBody\data\imageList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var imageList[]
     */
    public $imageList;

    /**
     * @var string
     */
    public $token;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'imageList'  => 'ImageList',
        'token'      => 'Token',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageList) {
            $res['ImageList'] = [];
            if (null !== $this->imageList && \is_array($this->imageList)) {
                $n = 0;
                foreach ($this->imageList as $item) {
                    $res['ImageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = [];
                $n                = 0;
                foreach ($map['ImageList'] as $item) {
                    $model->imageList[$n++] = null !== $item ? imageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
