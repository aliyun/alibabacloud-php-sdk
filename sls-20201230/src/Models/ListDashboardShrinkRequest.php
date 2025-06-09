<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ListDashboardShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dashboardName;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'dashboardName' => 'dashboardName',
        'displayName' => 'displayName',
        'offset' => 'offset',
        'size' => 'size',
        'tagsShrink' => 'tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardName) {
            $res['dashboardName'] = $this->dashboardName;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->tagsShrink) {
            $res['tags'] = $this->tagsShrink;
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
        if (isset($map['dashboardName'])) {
            $model->dashboardName = $map['dashboardName'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['tags'])) {
            $model->tagsShrink = $map['tags'];
        }

        return $model;
    }
}
