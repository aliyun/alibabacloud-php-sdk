<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DetachSharedStoragesRequest;

use AlibabaCloud\Dara\Model;

class sharedStorages extends Model
{
    /**
     * @var string
     */
    public $mountDirectory;
    protected $_name = [
        'mountDirectory' => 'MountDirectory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountDirectory) {
            $res['MountDirectory'] = $this->mountDirectory;
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
        if (isset($map['MountDirectory'])) {
            $model->mountDirectory = $map['MountDirectory'];
        }

        return $model;
    }
}
