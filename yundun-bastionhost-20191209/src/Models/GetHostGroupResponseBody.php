<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostGroupResponseBody\hostGroup;

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
        if (null !== $this->hostGroup) {
            $this->hostGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostGroup) {
            $res['HostGroup'] = null !== $this->hostGroup ? $this->hostGroup->toArray($noStream) : $this->hostGroup;
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
        if (isset($map['HostGroup'])) {
            $model->hostGroup = hostGroup::fromMap($map['HostGroup']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
