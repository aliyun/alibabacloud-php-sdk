<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyModelRequest\content\request;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyModelRequest\content\request\parameters\build;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyModelRequest\content\request\parameters\search;

class parameters extends Model
{
    /**
     * @var build
     */
    public $build;

    /**
     * @var search
     */
    public $search;
    protected $_name = [
        'build' => 'build',
        'search' => 'search',
    ];

    public function validate()
    {
        if (null !== $this->build) {
            $this->build->validate();
        }
        if (null !== $this->search) {
            $this->search->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->build) {
            $res['build'] = null !== $this->build ? $this->build->toArray($noStream) : $this->build;
        }

        if (null !== $this->search) {
            $res['search'] = null !== $this->search ? $this->search->toArray($noStream) : $this->search;
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
            $model->build = build::fromMap($map['build']);
        }

        if (isset($map['search'])) {
            $model->search = search::fromMap($map['search']);
        }

        return $model;
    }
}
