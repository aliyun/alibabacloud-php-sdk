<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentRequest\body;

use AlibabaCloud\Dara\Model;

class ossMounts extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'bucketName' => 'bucketName',
        'mountPath' => 'mountPath',
        'path' => 'path',
        'readOnly' => 'readOnly',
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

        if (null !== $this->mountPath) {
            $res['mountPath'] = $this->mountPath;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->readOnly) {
            $res['readOnly'] = $this->readOnly;
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

        if (isset($map['mountPath'])) {
            $model->mountPath = $map['mountPath'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['readOnly'])) {
            $model->readOnly = $map['readOnly'];
        }

        return $model;
    }
}
