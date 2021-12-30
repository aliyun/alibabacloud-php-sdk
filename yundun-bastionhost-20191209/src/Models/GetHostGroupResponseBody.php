<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupResponseBody\hostGroup;
use AlibabaCloud\Tea\Model;

class GetHostGroupResponseBody extends Model
{
    /**
     * @var hostGroup
     */
    public $hostGroup;

    /**
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
