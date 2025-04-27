<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\GetStsTokenResponseBody\stsTokenModel;

class GetStsTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stsTokenModel
     */
    public $stsTokenModel;
    protected $_name = [
        'requestId' => 'RequestId',
        'stsTokenModel' => 'StsTokenModel',
    ];

    public function validate()
    {
        if (null !== $this->stsTokenModel) {
            $this->stsTokenModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stsTokenModel) {
            $res['StsTokenModel'] = null !== $this->stsTokenModel ? $this->stsTokenModel->toArray($noStream) : $this->stsTokenModel;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StsTokenModel'])) {
            $model->stsTokenModel = stsTokenModel::fromMap($map['StsTokenModel']);
        }

        return $model;
    }
}
