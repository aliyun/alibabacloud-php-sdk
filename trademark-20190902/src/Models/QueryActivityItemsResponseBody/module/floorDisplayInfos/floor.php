<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody\module\floorDisplayInfos;

use AlibabaCloud\SDK\Trademark\V20190902\Models\QueryActivityItemsResponseBody\module\floorDisplayInfos\floor\subTitles;
use AlibabaCloud\Tea\Model;

class floor extends Model
{
    /**
     * @var string
     */
    public $icon;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $name;

    /**
     * @var subTitles
     */
    public $subTitles;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'icon'      => 'Icon',
        'index'     => 'Index',
        'name'      => 'Name',
        'subTitles' => 'SubTitles',
        'title'     => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subTitles) {
            $res['SubTitles'] = null !== $this->subTitles ? $this->subTitles->toMap() : null;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return floor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubTitles'])) {
            $model->subTitles = subTitles::fromMap($map['SubTitles']);
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
