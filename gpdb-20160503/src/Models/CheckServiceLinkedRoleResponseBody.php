<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $hasServiceLinkedRole;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'hasServiceLinkedRole' => 'HasServiceLinkedRole',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasServiceLinkedRole) {
            $res['HasServiceLinkedRole'] = $this->hasServiceLinkedRole;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasServiceLinkedRole'])) {
            $model->hasServiceLinkedRole = $map['HasServiceLinkedRole'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
