<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceRequest extends Model
{
    /**
     * @var string
     */
    public $memberToUpdate;

    /**
     * @var string
     */
    public $updateType;

    /**
     * @var string
     */
    public $body;
    protected $_name = [
        'memberToUpdate' => 'MemberToUpdate',
        'updateType' => 'UpdateType',
        'body' => 'body',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberToUpdate) {
            $res['MemberToUpdate'] = $this->memberToUpdate;
        }

        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
        }

        if (null !== $this->body) {
            $res['body'] = $this->body;
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
        if (isset($map['MemberToUpdate'])) {
            $model->memberToUpdate = $map['MemberToUpdate'];
        }

        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }

        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
