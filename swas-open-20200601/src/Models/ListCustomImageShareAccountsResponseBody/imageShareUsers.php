<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\ListCustomImageShareAccountsResponseBody;

use AlibabaCloud\Dara\Model;

class imageShareUsers extends Model
{
    /**
     * @var string
     */
    public $sharedTime;
    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'sharedTime' => 'SharedTime',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sharedTime) {
            $res['SharedTime'] = $this->sharedTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['SharedTime'])) {
            $model->sharedTime = $map['SharedTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
