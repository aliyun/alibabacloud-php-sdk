<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest\content\request;

use AlibabaCloud\Dara\Model;

class urlParams extends Model
{
    /**
     * @var mixed[]
     */
    public $build;

    /**
     * @var mixed[]
     */
    public $search;
    protected $_name = [
        'build' => 'build',
        'search' => 'search',
    ];

    public function validate()
    {
        if (\is_array($this->build)) {
            Model::validateArray($this->build);
        }
        if (\is_array($this->search)) {
            Model::validateArray($this->search);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->build) {
            if (\is_array($this->build)) {
                $res['build'] = [];
                foreach ($this->build as $key1 => $value1) {
                    $res['build'][$key1] = $value1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['build'])) {
            if (!empty($map['build'])) {
                $model->build = [];
                foreach ($map['build'] as $key1 => $value1) {
                    $model->build[$key1] = $value1;
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

        return $model;
    }
}
