<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponseBody\userBasicInfos;
use AlibabaCloud\Tea\Model;

class ListUserBasicInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var userBasicInfos
     */
    public $userBasicInfos;

    /**
     * @var string
     */
    public $marker;
    protected $_name = [
        'requestId'      => 'RequestId',
        'isTruncated'    => 'IsTruncated',
        'userBasicInfos' => 'UserBasicInfos',
        'marker'         => 'Marker',
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
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->userBasicInfos) {
            $res['UserBasicInfos'] = null !== $this->userBasicInfos ? $this->userBasicInfos->toMap() : null;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['UserBasicInfos'])) {
            $model->userBasicInfos = userBasicInfos::fromMap($map['UserBasicInfos']);
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        return $model;
    }
}
