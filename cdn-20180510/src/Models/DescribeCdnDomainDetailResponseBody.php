<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel;
use AlibabaCloud\Tea\Model;

class DescribeCdnDomainDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var getDomainDetailModel
     */
    public $getDomainDetailModel;
    protected $_name = [
        'requestId'            => 'RequestId',
        'getDomainDetailModel' => 'GetDomainDetailModel',
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
        if (null !== $this->getDomainDetailModel) {
            $res['GetDomainDetailModel'] = null !== $this->getDomainDetailModel ? $this->getDomainDetailModel->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GetDomainDetailModel'])) {
            $model->getDomainDetailModel = getDomainDetailModel::fromMap($map['GetDomainDetailModel']);
        }

        return $model;
    }
}
