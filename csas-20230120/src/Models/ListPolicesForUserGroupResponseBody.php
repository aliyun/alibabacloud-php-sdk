<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupResponseBody\userGroups;
use AlibabaCloud\Tea\Model;

class ListPolicesForUserGroupResponseBody extends Model
{
    /**
     * @example 5F04DFBD-3F48-5F70-AE72-474026670128
     *
     * @var string
     */
    public $requestId;

    /**
     * @var userGroups[]
     */
    public $userGroups;
    protected $_name = [
        'requestId'  => 'RequestId',
        'userGroups' => 'UserGroups',
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
        if (null !== $this->userGroups) {
            $res['UserGroups'] = [];
            if (null !== $this->userGroups && \is_array($this->userGroups)) {
                $n = 0;
                foreach ($this->userGroups as $item) {
                    $res['UserGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicesForUserGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = [];
                $n                 = 0;
                foreach ($map['UserGroups'] as $item) {
                    $model->userGroups[$n++] = null !== $item ? userGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
