<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateVodPackagingGroupResponseBody extends Model
{
    /**
     * @description The packaging group information.
     *
     * @var VodPackagingGroup
     */
    public $packagingGroup;

    /**
     * @description The ID of the request.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'packagingGroup' => 'PackagingGroup',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packagingGroup) {
            $res['PackagingGroup'] = null !== $this->packagingGroup ? $this->packagingGroup->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVodPackagingGroupResponseBody
     */
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
