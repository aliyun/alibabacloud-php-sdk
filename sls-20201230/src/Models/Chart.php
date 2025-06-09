<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

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
        'action' => 'action',
        'display' => 'display',
        'search' => 'search',
        'title' => 'title',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->action)) {
            Model::validateArray($this->action);
        }
        if (\is_array($this->display)) {
            Model::validateArray($this->display);
        }
        if (\is_array($this->search)) {
            Model::validateArray($this->search);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            if (\is_array($this->action)) {
                $res['action'] = [];
                foreach ($this->action as $key1 => $value1) {
                    $res['action'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->display) {
            if (\is_array($this->display)) {
                $res['display'] = [];
                foreach ($this->display as $key1 => $value1) {
                    $res['display'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->search) {
            if (\is_array($this->search)) {
                $res['search'] = [];
                foreach ($this->search as $key1 => $value1) {
                    $res['search'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['action'])) {
            if (!empty($map['action'])) {
                $model->action = [];
                foreach ($map['action'] as $key1 => $value1) {
                    $model->action[$key1] = $value1;
                }
            }
        }

        if (isset($map['display'])) {
            if (!empty($map['display'])) {
                $model->display = [];
                foreach ($map['display'] as $key1 => $value1) {
                    $model->display[$key1] = $value1;
                }
            }
        }

        if (isset($map['search'])) {
            if (!empty($map['search'])) {
                $model->search = [];
                foreach ($map['search'] as $key1 => $value1) {
                    $model->search[$key1] = $value1;
                }
            }
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
