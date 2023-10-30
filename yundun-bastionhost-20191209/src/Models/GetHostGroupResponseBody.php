<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupResponseBody\hostGroup;
use AlibabaCloud\Tea\Model;

class GetHostGroupResponseBody extends Model
{
    /**
     * @description The ID of the host group that you want to query.
     *
     * >  You can call the [ListHostGroups](~~201307~~) operation to query the ID of the host group.
     * @var hostGroup
     */
    public $hostGroup;

    /**
     * @description my host group.
     *
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hostGroup' => 'HostGroup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostGroup) {
            $res['HostGroup'] = null !== $this->hostGroup ? $this->hostGroup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHostGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostGroup'])) {
            $model->hostGroup = hostGroup::fromMap($map['HostGroup']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
