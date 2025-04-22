<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetAccessGroupResponseBody\accessGroup;

class GetAccessGroupResponseBody extends Model
{
    /**
     * @var accessGroup
     */
    public $accessGroup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessGroup' => 'AccessGroup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accessGroup) {
            $this->accessGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = null !== $this->accessGroup ? $this->accessGroup->toArray($noStream) : $this->accessGroup;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = accessGroup::fromMap($map['AccessGroup']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
