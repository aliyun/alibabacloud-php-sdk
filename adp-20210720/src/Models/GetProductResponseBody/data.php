<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetProductResponseBody;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetProductResponseBody\data\icons;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var icons[]
     */
    public $icons;

    /**
     * @example test-product
     *
     * @var string
     */
    public $name;

    /**
     * @example 54ccb2c9-3205-4159-8c44-xxxxxxxxxxxx
     *
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'categories'  => 'categories',
        'description' => 'description',
        'displayName' => 'displayName',
        'icons'       => 'icons',
        'name'        => 'name',
        'uid'         => 'uid',
        'vendor'      => 'vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['categories'] = $this->categories;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->icons) {
            $res['icons'] = [];
            if (null !== $this->icons && \is_array($this->icons)) {
                $n = 0;
                foreach ($this->icons as $item) {
                    $res['icons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }
        if (null !== $this->vendor) {
            $res['vendor'] = $this->vendor;
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
        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = $map['categories'];
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['icons'])) {
            if (!empty($map['icons'])) {
                $model->icons = [];
                $n            = 0;
                foreach ($map['icons'] as $item) {
                    $model->icons[$n++] = null !== $item ? icons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }
        if (isset($map['vendor'])) {
            $model->vendor = $map['vendor'];
        }

        return $model;
    }
}
