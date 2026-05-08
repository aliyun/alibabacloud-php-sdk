<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteContextsResponseBody extends Model
{
    /**
     * @var int
     */
    public $deletedCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deletedCount' => 'deletedCount',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletedCount) {
            $res['deletedCount'] = $this->deletedCount;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['deletedCount'])) {
            $model->deletedCount = $map['deletedCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
