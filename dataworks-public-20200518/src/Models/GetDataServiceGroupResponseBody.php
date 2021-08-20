<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServiceGroupResponseBody\group;
use AlibabaCloud\Tea\Model;

class GetDataServiceGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var group
     */
    public $group;
    protected $_name = [
        'requestId' => 'RequestId',
        'group'     => 'Group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataServiceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Group'])) {
            $model->group = group::fromMap($map['Group']);
        }

        return $model;
    }
}
