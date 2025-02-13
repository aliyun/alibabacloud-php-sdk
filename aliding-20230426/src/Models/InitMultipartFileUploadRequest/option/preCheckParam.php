<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InitMultipartFileUploadRequest\option;

use AlibabaCloud\Dara\Model;

class preCheckParam extends Model
{
    /**
     * @var string
     */
    public $md5;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $parentId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
