<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetVodPackagingGroupResponseBody extends Model
{
    /**
     * @description The information about the packaging group.
     *
     * @var VodPackagingGroup
     */
    public $packagingGroup;

    /**
     * @description The ID of the request.
     *
     * @example ****36-3C1E-4417-BDB2-1E034F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'packagingGroup' => 'PackagingGroup',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return GetVodPackagingGroupResponseBody
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
