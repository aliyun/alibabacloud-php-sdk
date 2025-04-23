<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyModelRequest\content;

class ModifyModelRequest extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $dryRun;
    protected $_name = [
        'content' => 'content',
        'status' => 'status',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        if (null !== $this->content) {
            $this->content->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toArray($noStream) : $this->content;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['content'])) {
            $model->content = content::fromMap($map['content']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
