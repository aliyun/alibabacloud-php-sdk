<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponseBody\userBasicInfos;
use AlibabaCloud\Tea\Model;

class ListUserBasicInfosResponseBody extends Model
{
    /**
     * @description Indicates whether the response is truncated. Valid value:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The `marker`. If part of a previous response is truncated, you can use this parameter to obtain the truncated part.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The ID of the request.
     *
     * @example EF2B25FD-CADE-445B-BE4D-E082E0FF1A0F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the information about the RAM user.
     *
     * @var userBasicInfos
     */
    public $userBasicInfos;
    protected $_name = [
        'isTruncated'    => 'IsTruncated',
        'marker'         => 'Marker',
        'requestId'      => 'RequestId',
        'userBasicInfos' => 'UserBasicInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userBasicInfos) {
            $res['UserBasicInfos'] = null !== $this->userBasicInfos ? $this->userBasicInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserBasicInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserBasicInfos'])) {
            $model->userBasicInfos = userBasicInfos::fromMap($map['UserBasicInfos']);
        }

        return $model;
    }
}
