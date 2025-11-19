<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class OssConfiguration extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $mountPoint;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $prefix;
    protected $_name = [
        'bucketName' => 'bucketName',
        'mountPoint' => 'mountPoint',
        'permission' => 'permission',
        'prefix' => 'prefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }

        if (null !== $this->mountPoint) {
            $res['mountPoint'] = $this->mountPoint;
        }

        if (null !== $this->permission) {
            $res['permission'] = $this->permission;
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
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
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }

        if (isset($map['mountPoint'])) {
            $model->mountPoint = $map['mountPoint'];
        }

        if (isset($map['permission'])) {
            $model->permission = $map['permission'];
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        return $model;
    }
}
