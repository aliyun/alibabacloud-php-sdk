<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponseBody\userBasicInfos;
use AlibabaCloud\Tea\Model;

class ListUserBasicInfosResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @example EF2B25FD-CADE-445B-BE4D-E082E0FF1A0F
     *
     * @var string
     */
    public $requestId;

    /**
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
