<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class CreateMaterialDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentDirectoryId;
    protected $_name = [
        'bizId' => 'BizId',
        'name' => 'Name',
        'parentDirectoryId' => 'ParentDirectoryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentDirectoryId) {
            $res['ParentDirectoryId'] = $this->parentDirectoryId;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentDirectoryId'])) {
            $model->parentDirectoryId = $map['ParentDirectoryId'];
        }

        return $model;
    }
}
