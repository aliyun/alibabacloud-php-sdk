<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetStsTokenResponseBody\stsTokenModel;
use AlibabaCloud\Tea\Model;

class GetStsTokenResponseBody extends Model
{
    /**
     * @example CCF92035-6231-5ABB-930E-1E003C32****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var stsTokenModel
     */
    public $stsTokenModel;
    protected $_name = [
        'requestId'     => 'RequestId',
        'stsTokenModel' => 'StsTokenModel',
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
        if (null !== $this->stsTokenModel) {
            $res['StsTokenModel'] = null !== $this->stsTokenModel ? $this->stsTokenModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStsTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StsTokenModel'])) {
            $model->stsTokenModel = stsTokenModel::fromMap($map['StsTokenModel']);
        }

        return $model;
    }
}
