<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\RemoveVpcAccessResponseBody\apis;

class RemoveVpcAccessResponseBody extends Model
{
    /**
     * @var apis
     */
    public $apis;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apis'      => 'Apis',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->apis) {
            $this->apis->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apis) {
            $res['Apis'] = null !== $this->apis ? $this->apis->toArray($noStream) : $this->apis;
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
        if (isset($map['Apis'])) {
            $model->apis = apis::fromMap($map['Apis']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
