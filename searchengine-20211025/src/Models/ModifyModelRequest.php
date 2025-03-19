<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\SDK\Searchengine\V20211025\Models\ModifyModelRequest\content;
use AlibabaCloud\Tea\Model;

class ModifyModelRequest extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @example ok
     *
     * @var string
     */
    public $status;

    /**
     * @example true
     *
     * @var string
     */
    public $dryRun;
    protected $_name = [
        'content' => 'content',
        'status' => 'status',
        'dryRun' => 'dryRun',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyModelRequest
     */
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
