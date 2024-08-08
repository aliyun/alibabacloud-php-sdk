<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadRequest\option;

use AlibabaCloud\Tea\Model;

class preCheckParam extends Model
{
    /**
     * @example md5
     *
     * @var string
     */
    public $md5;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example 0
     *
     * @var string
     */
    public $parentId;

    /**
     * @example 100
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'md5'      => 'Md5',
        'name'     => 'Name',
        'parentId' => 'ParentId',
        'size'     => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
