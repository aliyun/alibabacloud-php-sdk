<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupResponseBody\hostGroup;
use AlibabaCloud\Tea\Model;

class GetHostGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var hostGroup
     */
    public $hostGroup;
    protected $_name = [
        'requestId' => 'RequestId',
        'hostGroup' => 'HostGroup',
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
        if (null !== $this->hostGroup) {
            $res['HostGroup'] = null !== $this->hostGroup ? $this->hostGroup->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HostGroup'])) {
            $model->hostGroup = hostGroup::fromMap($map['HostGroup']);
        }

        return $model;
    }
}
