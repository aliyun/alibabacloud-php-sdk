<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetTicketResponseBody;

use AlibabaCloud\Dara\Model;

class processor extends Model
{
    /**
     * @var string
     */
    public $nickName;
    /**
     * @var string
     */
    public $unionId;
    protected $_name = [
        'nickName' => 'NickName',
        'unionId'  => 'UnionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->unionId) {
            $res['UnionId'] = $this->unionId;
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
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['UnionId'])) {
            $model->unionId = $map['UnionId'];
        }

        return $model;
    }
}
