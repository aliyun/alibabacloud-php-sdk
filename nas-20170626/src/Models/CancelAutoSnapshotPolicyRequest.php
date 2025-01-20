<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CancelAutoSnapshotPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $fileSystemIds;
    protected $_name = [
        'fileSystemIds' => 'FileSystemIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemIds) {
            $res['FileSystemIds'] = $this->fileSystemIds;
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
        if (isset($map['FileSystemIds'])) {
            $model->fileSystemIds = $map['FileSystemIds'];
        }

        return $model;
    }
}
