<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CreateFileRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var bool
     */
    public $ownerAccessInheritable;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fileSystemId'           => 'FileSystemId',
        'owner'                  => 'Owner',
        'ownerAccessInheritable' => 'OwnerAccessInheritable',
        'path'                   => 'Path',
        'type'                   => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ownerAccessInheritable) {
            $res['OwnerAccessInheritable'] = $this->ownerAccessInheritable;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['OwnerAccessInheritable'])) {
            $model->ownerAccessInheritable = $map['OwnerAccessInheritable'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
