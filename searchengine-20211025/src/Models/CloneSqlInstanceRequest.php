<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class CloneSqlInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $targetFolderId;
    protected $_name = [
        'name'           => 'name',
        'targetFolderId' => 'targetFolderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->targetFolderId) {
            $res['targetFolderId'] = $this->targetFolderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneSqlInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['targetFolderId'])) {
            $model->targetFolderId = $map['targetFolderId'];
        }

        return $model;
    }
}
