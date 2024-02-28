<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ListHostGroupAccountNamesForUserGroupResponseBody extends Model
{
    /**
     * @description The names of host accounts returned.
     *
     * @var string[]
     */
    public $hostAccountNames;

    /**
     * @description The request ID.
     *
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostAccountNames' => 'HostAccountNames',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountNames) {
            $res['HostAccountNames'] = $this->hostAccountNames;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostGroupAccountNamesForUserGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccountNames'])) {
            if (!empty($map['HostAccountNames'])) {
                $model->hostAccountNames = $map['HostAccountNames'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
