<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class Chart extends Model
{
    /**
     * @var mixed[]
     */
    public $action;

    /**
     * @var mixed[]
     */
    public $display;

    /**
     * @var mixed[]
     */
    public $search;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'action'  => 'action',
        'display' => 'display',
        'search'  => 'search',
        'title'   => 'title',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->display) {
            $res['display'] = $this->display;
        }
        if (null !== $this->search) {
            $res['search'] = $this->search;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Chart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['display'])) {
            $model->display = $map['display'];
        }
        if (isset($map['search'])) {
            $model->search = $map['search'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
