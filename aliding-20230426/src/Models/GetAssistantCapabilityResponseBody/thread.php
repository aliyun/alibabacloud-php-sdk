<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityResponseBody;

use AlibabaCloud\Dara\Model;

class thread extends Model
{
    /**
     * @var int
     */
    public $createAt;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createAt' => 'createAt',
        'id' => 'id',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createAt) {
            $res['createAt'] = $this->createAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['createAt'])) {
            $model->createAt = $map['createAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
