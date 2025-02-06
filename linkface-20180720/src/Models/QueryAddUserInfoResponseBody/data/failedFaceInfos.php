<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAddUserInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class failedFaceInfos extends Model
{
    /**
     * @var string
     */
    public $clientTag;
    /**
     * @var int
     */
    public $index;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientTag' => 'ClientTag',
        'index'     => 'Index',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientTag) {
            $res['ClientTag'] = $this->clientTag;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
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
        if (isset($map['ClientTag'])) {
            $model->clientTag = $map['ClientTag'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
