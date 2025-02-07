<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListUserBasicInfosResponseBody\userBasicInfos;

class ListUserBasicInfosResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isTruncated;
    /**
     * @var string
     */
    public $marker;
    /**
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
        if (null !== $this->userBasicInfos) {
            $this->userBasicInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['UserBasicInfos'] = null !== $this->userBasicInfos ? $this->userBasicInfos->toArray($noStream) : $this->userBasicInfos;
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
