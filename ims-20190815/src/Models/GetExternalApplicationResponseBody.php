<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetExternalApplicationResponseBody\externalApplication;

class GetExternalApplicationResponseBody extends Model
{
    /**
     * @var externalApplication
     */
    public $externalApplication;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'externalApplication' => 'ExternalApplication',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->externalApplication) {
            $this->externalApplication->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalApplication) {
            $res['ExternalApplication'] = null !== $this->externalApplication ? $this->externalApplication->toArray($noStream) : $this->externalApplication;
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
        if (isset($map['ExternalApplication'])) {
            $model->externalApplication = externalApplication::fromMap($map['ExternalApplication']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
