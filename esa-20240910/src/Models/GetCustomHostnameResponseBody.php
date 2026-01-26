<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCustomHostnameResponseBody\customHostnameModel;

class GetCustomHostnameResponseBody extends Model
{
    /**
     * @var customHostnameModel
     */
    public $customHostnameModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customHostnameModel' => 'CustomHostnameModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->customHostnameModel) {
            $this->customHostnameModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customHostnameModel) {
            $res['CustomHostnameModel'] = null !== $this->customHostnameModel ? $this->customHostnameModel->toArray($noStream) : $this->customHostnameModel;
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
        if (isset($map['CustomHostnameModel'])) {
            $model->customHostnameModel = customHostnameModel::fromMap($map['CustomHostnameModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
