<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainDetailResponseBody\getDomainDetailModel;

class DescribeCdnDomainDetailResponseBody extends Model
{
    /**
     * @var getDomainDetailModel
     */
    public $getDomainDetailModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'getDomainDetailModel' => 'GetDomainDetailModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->getDomainDetailModel) {
            $this->getDomainDetailModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->getDomainDetailModel) {
            $res['GetDomainDetailModel'] = null !== $this->getDomainDetailModel ? $this->getDomainDetailModel->toArray($noStream) : $this->getDomainDetailModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GetDomainDetailModel'])) {
            $model->getDomainDetailModel = getDomainDetailModel::fromMap($map['GetDomainDetailModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
