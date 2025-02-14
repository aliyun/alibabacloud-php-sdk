<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateVodPackagingGroupResponseBody extends Model
{
    /**
     * @var VodPackagingGroup
     */
    public $packagingGroup;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'packagingGroup' => 'PackagingGroup',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->packagingGroup) {
            $this->packagingGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->packagingGroup) {
            $res['PackagingGroup'] = null !== $this->packagingGroup ? $this->packagingGroup->toArray($noStream) : $this->packagingGroup;
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
        if (isset($map['PackagingGroup'])) {
            $model->packagingGroup = VodPackagingGroup::fromMap($map['PackagingGroup']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
