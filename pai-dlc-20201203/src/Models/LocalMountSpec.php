<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class LocalMountSpec extends Model
{
    /**
     * @var string
     */
    public $localPath;

    /**
     * @var string
     */
    public $mountMode;

    /**
     * @var string
     */
    public $mountPath;
    protected $_name = [
        'localPath' => 'LocalPath',
        'mountMode' => 'MountMode',
        'mountPath' => 'MountPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localPath) {
            $res['LocalPath'] = $this->localPath;
        }

        if (null !== $this->mountMode) {
            $res['MountMode'] = $this->mountMode;
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
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
        if (isset($map['LocalPath'])) {
            $model->localPath = $map['LocalPath'];
        }

        if (isset($map['MountMode'])) {
            $model->mountMode = $map['MountMode'];
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        return $model;
    }
}
