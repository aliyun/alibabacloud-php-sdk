<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsResponseBody\result\page;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneItemsResponseBody\result\sceneItemList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var page
     */
    public $page;

    /**
     * @var sceneItemList[]
     */
    public $sceneItemList;
    protected $_name = [
        'page'          => 'Page',
        'sceneItemList' => 'SceneItemList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->sceneItemList) {
            $res['SceneItemList'] = [];
            if (null !== $this->sceneItemList && \is_array($this->sceneItemList)) {
                $n = 0;
                foreach ($this->sceneItemList as $item) {
                    $res['SceneItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['SceneItemList'])) {
            if (!empty($map['SceneItemList'])) {
                $model->sceneItemList = [];
                $n                    = 0;
                foreach ($map['SceneItemList'] as $item) {
                    $model->sceneItemList[$n++] = null !== $item ? sceneItemList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
