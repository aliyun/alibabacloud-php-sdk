<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class CreateReceiverRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $receiverName;

    /**
     * @var int
     */
    public $receiverTenantId;
    protected $_name = [
        'comment' => 'comment',
        'receiverName' => 'receiverName',
        'receiverTenantId' => 'receiverTenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->receiverName) {
            $res['receiverName'] = $this->receiverName;
        }

        if (null !== $this->receiverTenantId) {
            $res['receiverTenantId'] = $this->receiverTenantId;
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
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['receiverName'])) {
            $model->receiverName = $map['receiverName'];
        }

        if (isset($map['receiverTenantId'])) {
            $model->receiverTenantId = $map['receiverTenantId'];
        }

        return $model;
    }
}
