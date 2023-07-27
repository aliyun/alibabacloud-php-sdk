<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class PutSymlinkHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example true
     *
     * @var string
     */
    public $forbidOverwrite;

    /**
     * @var string
     */
    public $acl;

    /**
     * @var string
     */
    public $storageClass;

    /**
     * @example oss.jpg
     *
     * @var string
     */
    public $symlinkTargetKey;
    protected $_name = [
        'forbidOverwrite'  => 'x-oss-forbid-overwrite',
        'acl'              => 'x-oss-object-acl',
        'storageClass'     => 'x-oss-storage-class',
        'symlinkTargetKey' => 'x-oss-symlink-target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->forbidOverwrite) {
            $res['x-oss-forbid-overwrite'] = $this->forbidOverwrite;
        }
        if (null !== $this->acl) {
            $res['x-oss-object-acl'] = $this->acl;
        }
        if (null !== $this->storageClass) {
            $res['x-oss-storage-class'] = $this->storageClass;
        }
        if (null !== $this->symlinkTargetKey) {
            $res['x-oss-symlink-target'] = $this->symlinkTargetKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutSymlinkHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-oss-forbid-overwrite'])) {
            $model->forbidOverwrite = $map['x-oss-forbid-overwrite'];
        }
        if (isset($map['x-oss-object-acl'])) {
            $model->acl = $map['x-oss-object-acl'];
        }
        if (isset($map['x-oss-storage-class'])) {
            $model->storageClass = $map['x-oss-storage-class'];
        }
        if (isset($map['x-oss-symlink-target'])) {
            $model->symlinkTargetKey = $map['x-oss-symlink-target'];
        }

        return $model;
    }
}
