<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel;
use AlibabaCloud\Tea\Model;

class DescribeCdnDomainDetailResponseBody extends Model
{
    /**
     * @description The detailed information about the accelerated domain name.
     *
     * @var getDomainDetailModel
     */
    public $getDomainDetailModel;

    /**
     * @description The ID of the request.
     *
     * @example 18CF38AA-1275-451D-A12B-4EC0BF1C5E30
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'getDomainDetailModel' => 'GetDomainDetailModel',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->getDomainDetailModel) {
            $res['GetDomainDetailModel'] = null !== $this->getDomainDetailModel ? $this->getDomainDetailModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnDomainDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GetDomainDetailModel'])) {
            $model->getDomainDetailModel = getDomainDetailModel::fromMap($map['GetDomainDetailModel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
