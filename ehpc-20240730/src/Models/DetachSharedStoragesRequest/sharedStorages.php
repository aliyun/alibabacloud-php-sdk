<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DetachSharedStoragesRequest;

use AlibabaCloud\Tea\Model;

class sharedStorages extends Model
{
    /**
     * @description The local mount directory of the mounted file system.
     *
     * This parameter is required.
     * @example /test
     *
     * @var string
     */
    public $mountDirectory;
    protected $_name = [
        'mountDirectory' => 'MountDirectory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountDirectory) {
            $res['MountDirectory'] = $this->mountDirectory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedStorages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountDirectory'])) {
            $model->mountDirectory = $map['MountDirectory'];
        }

        return $model;
    }
}
