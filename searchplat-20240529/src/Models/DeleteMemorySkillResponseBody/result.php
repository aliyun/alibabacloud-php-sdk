<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\DeleteMemorySkillResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $skillId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'message',
        'skillId' => 'skill_id',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->skillId) {
            $res['skill_id'] = $this->skillId;
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['skill_id'])) {
            $model->skillId = $map['skill_id'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
