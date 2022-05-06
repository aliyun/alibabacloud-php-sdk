<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\GetAccessGroupResponseBody\accessGroup;
use AlibabaCloud\Tea\Model;

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
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = null !== $this->accessGroup ? $this->accessGroup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessGroupResponseBody
     */
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
