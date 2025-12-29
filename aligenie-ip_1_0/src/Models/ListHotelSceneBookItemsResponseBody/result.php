<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneBookItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneBookItemsResponseBody\result\page;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelSceneBookItemsResponseBody\result\sceneItemList;

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
        'page' => 'Page',
        'sceneItemList' => 'SceneItemList',
    ];

    public function validate()
    {
        if (null !== $this->page) {
            $this->page->validate();
        }
        if (\is_array($this->sceneItemList)) {
            Model::validateArray($this->sceneItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toArray($noStream) : $this->page;
        }

        if (null !== $this->sceneItemList) {
            if (\is_array($this->sceneItemList)) {
                $res['SceneItemList'] = [];
                $n1 = 0;
                foreach ($this->sceneItemList as $item1) {
                    $res['SceneItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }

        if (isset($map['SceneItemList'])) {
            if (!empty($map['SceneItemList'])) {
                $model->sceneItemList = [];
                $n1 = 0;
                foreach ($map['SceneItemList'] as $item1) {
                    $model->sceneItemList[$n1] = sceneItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
