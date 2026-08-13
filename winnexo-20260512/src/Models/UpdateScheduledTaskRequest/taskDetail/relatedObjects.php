<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest\taskDetail;

use AlibabaCloud\Dara\Model;

class relatedObjects extends Model
{
    /**
     * @var string
     */
    public $mentionType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'mentionType' => 'mentionType',
        'name' => 'name',
        'objectId' => 'objectId',
        'objectType' => 'objectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mentionType) {
            $res['mentionType'] = $this->mentionType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
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
        if (isset($map['mentionType'])) {
            $model->mentionType = $map['mentionType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        return $model;
    }
}
