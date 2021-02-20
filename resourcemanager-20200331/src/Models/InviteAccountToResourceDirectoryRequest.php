<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class InviteAccountToResourceDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $targetEntity;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $note;
    protected $_name = [
        'targetEntity' => 'TargetEntity',
        'targetType'   => 'TargetType',
        'note'         => 'Note',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetEntity) {
            $res['TargetEntity'] = $this->targetEntity;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InviteAccountToResourceDirectoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetEntity'])) {
            $model->targetEntity = $map['TargetEntity'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        return $model;
    }
}
