<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponse\userBasicInfos;
use AlibabaCloud\Tea\Model;

class ListUserBasicInfosResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var userBasicInfos
     */
    public $userBasicInfos;
    protected $_name = [
        'requestId'      => 'RequestId',
        'marker'         => 'Marker',
        'isTruncated'    => 'IsTruncated',
        'userBasicInfos' => 'UserBasicInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('marker', $this->marker, true);
        Model::validateRequired('isTruncated', $this->isTruncated, true);
        Model::validateRequired('userBasicInfos', $this->userBasicInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->userBasicInfos) {
            $res['UserBasicInfos'] = null !== $this->userBasicInfos ? $this->userBasicInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserBasicInfosResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['UserBasicInfos'])) {
            $model->userBasicInfos = userBasicInfos::fromMap($map['UserBasicInfos']);
        }

        return $model;
    }
}
