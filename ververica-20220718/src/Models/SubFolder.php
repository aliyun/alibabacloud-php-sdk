<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class SubFolder extends Model
{
    /**
     * @example a579aec9-1d5e-3382-9d65-9887ff6cfaff
     *
     * @var string
     */
    public $folderId;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example 95c0787c-408f-4e1f-88ba-ef0a84a2c2ee
     *
     * @var string
     */
    public $parentId;
    protected $_name = [
        'folderId' => 'folderId',
        'name'     => 'name',
        'parentId' => 'parentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubFolder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        return $model;
    }
}
